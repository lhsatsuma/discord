<?php

namespace App\Lib;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use UnexpectedValueException;

/** Owns outbound Discord API and OAuth HTTP communication. */
class DiscordApi
{
    private const BASE_URL = 'https://discord.com/api';

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
        $response = $this->client()->asForm()->post('/oauth2/token', [
            'client_id' => config('services.discord.client_id'),
            'client_secret' => config('services.discord.client_secret'),
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => config('services.discord.redirect'),
        ])->throw()->json();

        if (! is_array($response) || empty($response['access_token'])) {
            throw new UnexpectedValueException('Discord returned an invalid OAuth token response.');
        }

        return $response;
    }

    /** @return array<string, mixed> */
    public function currentUser(string $accessToken): array
    {
        $response = $this->client()->withToken($accessToken)->get('/users/@me')->throw()->json();
        if (! is_array($response) || empty($response['id'])) {
            throw new UnexpectedValueException('Discord returned an invalid user response.');
        }

        return $response;
    }

    /** @return list<array<string, mixed>> */
    public function currentUserGuilds(string $accessToken): array
    {
        $result = $this->client()->withToken($accessToken)->get('/users/@me/guilds');
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

        $response = $this->client()
            ->withHeaders(['Authorization' => 'Bot '.$token])
            ->get("/guilds/{$guildId}/channels")
            ->throw()
            ->json();

        if (! is_array($response) || ! array_is_list($response)) {
            throw new UnexpectedValueException('Discord returned an invalid channel list.');
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
