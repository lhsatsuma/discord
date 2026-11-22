<?php

namespace App\Lib;

use Closure;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;
use UnexpectedValueException;

/** Owns outbound Discord API and OAuth HTTP communication. */
class DiscordApi
{
    private const BASE_URL = 'https://discord.com/api';
    private const CHANNEL_CACHE_TTL_SECONDS = 180;

    public function authorizationUrl(string $state): string
    {
        return 'https://discord.com/oauth2/authorize?'.http_build_query([
            'client_id' => config('services.discord.client_id'),
            'redirect_uri' => config('services.discord.redirect'),
            'response_type' => 'code',
            'scope' => 'identify guilds',
            'state' => $state,
        ]);
    }

    /** @return array<string, mixed> */
    public function exchangeAuthorizationCode(string $code): array
    {
        $response = $this->loggedRequest('POST', '/oauth2/token', 'oauth2-client', fn (): Response =>
            $this->client()->asForm()->post('/oauth2/token', [
                'client_id' => config('services.discord.client_id'),
                'client_secret' => config('services.discord.client_secret'),
                'grant_type' => 'authorization_code',
                'code' => $code,
                'redirect_uri' => config('services.discord.redirect'),
            ]),
            ['grant_type' => 'authorization_code']
        )->throw()->json();

        if (! is_array($response) || empty($response['access_token'])) {
            throw new UnexpectedValueException('Discord returned an invalid OAuth token response.');
        }

        return $response;
    }

    /** @return array<string, mixed> */
    public function currentUser(string $accessToken): array
    {
        $response = $this->loggedRequest('GET', '/users/@me', 'oauth2-user', fn (): Response =>
            $this->client()->withToken($accessToken)->get('/users/@me')
        )->throw()->json();
        if (! is_array($response) || empty($response['id'])) {
            throw new UnexpectedValueException('Discord returned an invalid user response.');
        }

        return $response;
    }

    /** @return list<array<string, mixed>> */
    public function currentUserGuilds(string $accessToken, ?string $userId = null): array
    {
        $result = $this->loggedRequest('GET', '/users/@me/guilds', 'oauth2-user', fn (): Response =>
            $this->client()->withToken($accessToken)->get('/users/@me/guilds'),
            $userId ? ['discord_user_id' => $userId] : []
        );
        if ($result->status() === 401) {
            throw new DiscordUnauthorizedException('Discord OAuth access token is no longer valid.');
        }
        if ($result->status() === 429) {
            $retryAfter = (float) ($result->json('retry_after') ?? $result->header('Retry-After') ?? 1);
            throw new DiscordRateLimitException(max(1, (int) ceil($retryAfter)));
        }
        $response = $result->throw()->json();
        if (! is_array($response) || ! array_is_list($response)) {
            throw new UnexpectedValueException('Discord returned an invalid guild list.');
        }

        return $response;
    }

    /** @return list<array<string, mixed>> */
    public function botGuildChannels(string $guildId): array
    {
        $token = (string) config('services.discord.bot_token');
        if ($token === '') {
            throw new UnexpectedValueException('Discord bot token is not configured.');
        }

        $botId = (string) config('services.discord.bot_id', 'unknown');
        $cache = Cache::store('redis');
        $key = 'dashboard:discord-guild-channels:v1:'.$botId.':'.$guildId;
        $channels = $cache->get($key);
        if (is_array($channels)) {
            Log::debug('Discord API response cache hit.', [
                'endpoint' => '/guilds/{guild_id}/channels',
                'bot_id' => $botId,
                'guild_id' => $guildId,
                'cache_ttl_seconds' => self::CHANNEL_CACHE_TTL_SECONDS,
            ]);
            return $channels;
        }

        return $cache->lock($key.':lock', 15)->block(12, function () use ($cache, $key, $botId, $guildId, $token): array {
            $channels = $cache->get($key);
            if (is_array($channels)) {
                Log::debug('Discord API response cache hit after lock.', [
                    'endpoint' => '/guilds/{guild_id}/channels',
                    'bot_id' => $botId,
                    'guild_id' => $guildId,
                    'cache_ttl_seconds' => self::CHANNEL_CACHE_TTL_SECONDS,
                ]);
                return $channels;
            }

            $response = $this->loggedRequest('GET', "/guilds/{$guildId}/channels", 'bot', fn (): Response =>
                $this->client()
                    ->withHeaders(['Authorization' => 'Bot '.$token])
                    ->get("/guilds/{$guildId}/channels"),
                ['bot_id' => (string) config('services.discord.bot_id'), 'guild_id' => $guildId]
            )->throw()->json();

            if (! is_array($response) || ! array_is_list($response)) {
                throw new UnexpectedValueException('Discord returned an invalid channel list.');
            }

            $cache->put($key, $response, now()->addSeconds(self::CHANNEL_CACHE_TTL_SECONDS));
            return $response;
        });
    }

    /**
     * Log request metadata and response status without logging credentials or
     * request/response bodies (which can contain OAuth secrets and tokens).
     *
     * @param array<string, int|string|null> $context
     */
    private function loggedRequest(string $method, string $path, string $authType, Closure $send, array $context = []): Response
    {
        $details = array_merge([
            'method' => $method,
            'endpoint' => $path,
            'auth_type' => $authType,
        ], $context);
        $startedAt = microtime(true);
        Log::info('Discord API request started.', $details);

        try {
            $response = $send();
        } catch (Throwable $error) {
            Log::warning('Discord API request failed before receiving a response.', $details + [
                'duration_ms' => round((microtime(true) - $startedAt) * 1000, 2),
                'exception' => $error::class,
                'error' => mb_substr($error->getMessage(), 0, 500),
            ]);
            throw $error;
        }

        $responseDetails = $details + [
            'status' => $response->status(),
            'duration_ms' => round((microtime(true) - $startedAt) * 1000, 2),
            'discord_request_id' => $response->header('X-Discord-Request-Id'),
            'rate_limit_bucket' => $response->header('X-RateLimit-Bucket'),
            'rate_limit_limit' => $response->header('X-RateLimit-Limit'),
            'rate_limit_remaining' => $response->header('X-RateLimit-Remaining'),
            'rate_limit_reset_after' => $response->header('X-RateLimit-Reset-After'),
            'retry_after' => $response->header('Retry-After'),
        ];

        if ($response->failed()) {
            Log::warning('Discord API response received with an error status.', $responseDetails);
        } else {
            Log::info('Discord API response received.', $responseDetails);
        }

        return $response;
    }

    private function client(): PendingRequest
    {
        return Http::baseUrl(self::BASE_URL)
            ->acceptJson()
            ->timeout(10)
            ->withOptions(['verify' => config('services.discord.ca_bundle') ?: true]);
    }
}
