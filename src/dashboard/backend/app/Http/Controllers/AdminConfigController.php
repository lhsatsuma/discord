<?php

namespace App\Http\Controllers;

use App\Lib\DiscordApi;
use App\Lib\DiscordRateLimitException;
use App\Lib\DiscordUnauthorizedException;
use App\Services\DashboardGuilds;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Throwable;

class AdminConfigController extends Controller
{
    private const MAX_DELETE_PERIOD = 10080;
    private const MAX_MUTE_DAYS = 28;
    private const MAX_WELCOME_MESSAGE = 2000;

    public function servers(Request $request, DashboardGuilds $dashboardGuilds): JsonResponse
    {
        [$guilds, $error] = $this->verifiedGuilds($request, $dashboardGuilds);
        if ($error) return $error;

        return response()->json(['servers' => $guilds]);
    }

    public function show(Request $request, string $serverId, DiscordApi $discordApi, DashboardGuilds $dashboardGuilds): JsonResponse
    {
        [$guilds, $error] = $this->verifiedGuilds($request, $dashboardGuilds);
        if ($error) return $error;
        $guild = collect($guilds)->firstWhere('id', $serverId);
        if (! $guild) return response()->json(['message' => 'You no longer have permission to manage this server.'], 403);

        try {
            if (! config('services.discord.bot_token')) {
                Log::error('Discord bot token is required to list server channels.');
                return response()->json(['message' => 'Server channel access is not configured.'], 503);
            }
            $settings = DB::table('servers')->where('id', $serverId)->where('active', true)->first();
            if (! $settings) return response()->json(['message' => 'This server is not configured for the bot.'], 404);
            $channels = $discordApi->botGuildChannels($serverId);

            return response()->json([
                'server' => $guild,
                'config' => [
                    'reddit_odd_memes' => (int) $settings->reddit_odd_memes,
                    'subreddits_memes' => preg_split('/[,\r\n]/', (string) ($settings->subreddits_memes ?? ''), -1, PREG_SPLIT_NO_EMPTY) ?: [],
                    'autoban_del_period' => (int) $settings->autoban_del_period,
                    'autoban_punishment' => $settings->autoban_punishment,
                    'autoban_mute_days' => (int) $settings->autoban_mute_days,
                    'send_voice_update' => (bool) $settings->send_voice_update,
                    'welcome_message_active' => (bool) $settings->welcome_message_active,
                    'welcome_channel_id' => $settings->welcome_channel_id,
                    'welcome_message' => (string) ($settings->welcome_message ?? ''),
                    'admin_channels' => DB::table('admin_channels')->where('server', $serverId)->orderBy('channel_id')->pluck('channel_id')->map(static fn ($id): string => (string) $id)->all(),
                    'forbidden_channels' => DB::table('channels_forbidden')->where('server', $serverId)->orderBy('channel_id')->pluck('channel_id')->map(static fn ($id): string => (string) $id)->all(),
                ],
                'channels' => array_values(array_map(static fn (array $channel): array => [
                    'id' => (string) $channel['id'], 'name' => (string) $channel['name'],
                ], array_filter($channels, static fn ($channel): bool => is_array($channel) && ($channel['type'] ?? null) === 0))),
            ]);
        } catch (Throwable $error) {
            Log::error('Could not load server configuration.', ['server_id' => $serverId, 'message' => $error->getMessage()]);
            return response()->json(['message' => 'Could not load server configuration.'], 500);
        }
    }

    public function update(Request $request, string $serverId, DiscordApi $discordApi, DashboardGuilds $dashboardGuilds): JsonResponse
    {
        [$guilds, $error] = $this->verifiedGuilds($request, $dashboardGuilds);
        if ($error) return $error;
        if (! collect($guilds)->contains('id', $serverId)) {
            return response()->json(['message' => 'You no longer have permission to manage this server.'], 403);
        }

        try {
            $data = $request->validate([
                'reddit_odd_memes' => ['required', 'integer', 'between:0,10'],
                'subreddits_memes' => ['sometimes', 'array', 'max:100'],
                'subreddits_memes.*' => ['string', 'regex:/^[A-Za-z0-9_]{2,21}$/'],
                'autoban_del_period' => ['required', 'integer', 'between:0,'.self::MAX_DELETE_PERIOD],
                'autoban_punishment' => ['required', 'in:ban,mute'],
                'autoban_mute_days' => ['required', 'integer', 'between:1,'.self::MAX_MUTE_DAYS],
                'send_voice_update' => ['required', 'boolean'],
                'welcome_message_active' => ['required', 'boolean'],
                'welcome_channel_id' => ['nullable', 'string', 'regex:/^[0-9]{17,20}$/'],
                'welcome_message' => ['nullable', 'string', 'max:'.self::MAX_WELCOME_MESSAGE],
                'admin_channels' => ['sometimes', 'array', 'max:500'],
                'admin_channels.*' => ['required', 'string', 'regex:/^[0-9]{17,20}$/', 'distinct'],
                'forbidden_channels' => ['sometimes', 'array', 'max:500'],
                'forbidden_channels.*' => ['required', 'string', 'regex:/^[0-9]{17,20}$/', 'distinct'],
            ]);
            $subreddits = array_values(array_unique(array_map('trim', $data['subreddits_memes'] ?? [])));
            $message = (string) ($data['welcome_message'] ?? '');
            $botId = (string) config('services.discord.bot_id');
            if ($botId === '' || $botId === '0') {
                Log::error('Discord bot ID is required for server settings cache invalidation.');
                return response()->json(['message' => 'Server settings cache is not configured.'], 503);
            }
            if ($data['welcome_message_active'] && (empty($data['welcome_channel_id']) || trim($message) === '')) {
                throw ValidationException::withMessages(['welcome_message' => 'Enabled welcome messages need a channel and message.']);
            }
            if (strlen(mb_convert_encoding(str_replace('[@user]', '<@18446744073709551615>', $message), 'UTF-16LE')) / 2 > self::MAX_WELCOME_MESSAGE) {
                throw ValidationException::withMessages(['welcome_message' => 'The rendered welcome message is too long.']);
            }

            $availableChannelIds = collect($discordApi->botGuildChannels($serverId))
                ->filter(static fn ($channel): bool => is_array($channel) && ($channel['type'] ?? null) === 0)
                ->pluck('id')
                ->map(static fn ($id): string => (string) $id);
            $validChannel = ! empty($data['welcome_channel_id']) && $availableChannelIds->contains((string) $data['welcome_channel_id']);
            if (! empty($data['welcome_channel_id']) && ! $validChannel) {
                throw ValidationException::withMessages(['welcome_channel_id' => 'Choose a text channel from this server.']);
            }

            foreach (['admin_channels', 'forbidden_channels'] as $field) {
                if (array_key_exists($field, $data) && collect($data[$field])->diff($availableChannelIds)->isNotEmpty()) {
                    throw ValidationException::withMessages([$field => 'Choose text channels from this server.']);
                }
            }

            $identity = $request->attributes->get('dashboard.session')['identity'];
            $updated = DB::transaction(function () use ($serverId, $data, $subreddits, $message, $identity): int {
                $updated = DB::table('servers')->where('id', $serverId)->where('active', true)->update([
                    'reddit_odd_memes' => $data['reddit_odd_memes'],
                    'subreddits_memes' => implode(',', $subreddits),
                    'autoban_del_period' => $data['autoban_del_period'],
                    'autoban_punishment' => $data['autoban_punishment'],
                    'autoban_mute_days' => $data['autoban_mute_days'],
                    'send_voice_update' => $data['send_voice_update'],
                    'welcome_message_active' => $data['welcome_message_active'],
                    'welcome_channel_id' => $data['welcome_channel_id'] ?: null,
                    'welcome_message' => $message !== '' ? $message : null,
                    'updated_at' => now(),
                    'created_by' => $identity['id'],
                ]);

                if ($updated > 0) {
                    if (array_key_exists('admin_channels', $data)) {
                        $this->syncChannelRules('admin_channels', $serverId, $data['admin_channels'], (string) $identity['id']);
                    }
                    if (array_key_exists('forbidden_channels', $data)) {
                        $this->syncChannelRules('channels_forbidden', $serverId, $data['forbidden_channels'], (string) $identity['id']);
                    }
                }

                return $updated;
            });
            if (! $updated) return response()->json(['message' => 'Could not save configuration for this server.'], 404);

            $key = 'discord-bot:server-settings:v3:'.$botId.':'.$serverId;
            Redis::connection('bot_cache')->del($key);
            return response()->json(['ok' => true]);
        } catch (ValidationException $error) {
            throw $error;
        } catch (Throwable $error) {
            Log::error('Could not save server configuration.', ['server_id' => $serverId, 'message' => $error->getMessage()]);
            return response()->json(['message' => 'Could not save server configuration.'], 500);
        }
    }

    /** @param list<string> $channelIds */
    private function syncChannelRules(string $table, string $serverId, array $channelIds, string $userId): void
    {
        // The table name is selected only from this fixed allowlist.
        if (! in_array($table, ['admin_channels', 'channels_forbidden'], true)) {
            throw new \InvalidArgumentException('Unsupported channel rule table.');
        }

        $channelIds = array_values(array_unique($channelIds));
        $existingChannelIds = DB::table($table)
            ->where('server', $serverId)
            ->lockForUpdate()
            ->pluck('channel_id')
            ->map(static fn ($id): string => (string) $id)
            ->all();
        $existing = array_fill_keys($existingChannelIds, true);

        $removedChannelIds = array_values(array_diff($existingChannelIds, $channelIds));
        if ($removedChannelIds !== []) {
            DB::table($table)
                ->where('server', $serverId)
                ->whereIn('channel_id', $removedChannelIds)
                ->delete();
        }

        $addedChannelIds = array_values(array_filter($channelIds, static fn (string $id): bool => ! isset($existing[$id])));
        if ($addedChannelIds === []) return;

        $now = now();
        DB::table($table)->insert(array_map(static fn (string $channelId): array => [
            'id' => (string) Str::uuid(),
            'created_at' => $now,
            'updated_at' => $now,
            'created_by' => $userId,
            'server' => $serverId,
            'channel_id' => $channelId,
        ], $addedChannelIds));
    }

    private function verifiedGuilds(Request $request, DashboardGuilds $dashboardGuilds): array
    {
        try {
            $session = $request->attributes->get('dashboard.session');
            $guilds = $dashboardGuilds->configuredForUser(
                (string) $session['identity']['id'],
                (string) $session['access_token']
            );

            return [$guilds, null];
        } catch (DiscordRateLimitException $error) {
            Log::warning('Discord rate limited a server permission check.', ['retry_after' => $error->retryAfter]);
            return [[], response()->json([
                'message' => 'Discord is temporarily rate limiting requests. Please try again shortly.',
                'retry_after' => $error->retryAfter,
            ], 429)->header('Retry-After', (string) $error->retryAfter)];
        } catch (DiscordUnauthorizedException $error) {
            return [[], response()->json(['message' => 'Discord session expired. Sign in again.'], 401)];
        } catch (Throwable $error) {
            Log::warning('Could not verify Discord server permissions.', ['message' => $error->getMessage()]);
            return [[], response()->json(['message' => 'Could not verify your Discord permissions.'], 502)];
        }
    }

}
