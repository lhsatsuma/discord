<?php

namespace App\Http\Controllers;

use App\Lib\DiscordApi;
use App\Lib\DiscordRateLimitException;
use App\Lib\DiscordUnauthorizedException;
use App\Models\AdminChannel;
use App\Models\ForbiddenChannel;
use App\Models\Server;
use App\Models\ServerConfig;
use App\Models\TriviaCategory;
use App\Models\TriviaMember;
use App\Services\DashboardGuilds;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\ValidationException;
use Throwable;

class AdminConfigController extends Controller
{
    private const MAX_DELETE_PERIOD = 10080;
    private const MAX_MUTE_DAYS = 28;
    private const MAX_WELCOME_MESSAGE = 2000;
    private const DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES = 60;
    private const DEFAULT_AUTOBAN_MUTE_DAYS = 7;
    private const DEFAULT_TRIVIA_QUESTIONS_PER_DAY = 3;
    private const DEFAULT_LOCALE = 'en-US';
    private const SUPPORTED_LOCALES = ['en-US', 'pt-BR'];

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
            $settings = Server::findActive($serverId);
            if (! $settings) return response()->json(['message' => 'This server is not configured for the bot.'], 404);
            $serverConfig = ServerConfig::valuesForServer($serverId, [
                    'reddit_odd_memes', 'subreddits_memes',
                    'autoban_del_period', 'autoban_punishment', 'autoban_mute_days',
                    'send_voice_update', 'welcome_message_active', 'welcome_channel_id', 'welcome_message',
                    'locale', 'trivia_categories', 'trivia_questions_per_day',
                ]);
            $configValue = static function (string $code) use ($serverConfig): ?string {
                $config = $serverConfig->get($code);
                return $config?->long_value ?? $config?->value;
            };
            $locale = $configValue('locale');
            $triviaCategoryIds = json_decode($configValue('trivia_categories') ?? 'null', true);
            if (! is_array($triviaCategoryIds)) {
                $triviaCategoryIds = TriviaCategory::idsForLocale(in_array($locale, self::SUPPORTED_LOCALES, true) ? $locale : self::DEFAULT_LOCALE);
            }
            $channels = $discordApi->botGuildChannels($serverId);

            return response()->json([
                'server' => $guild,
                'config' => [
                    'locale' => in_array($locale, self::SUPPORTED_LOCALES, true) ? $locale : self::DEFAULT_LOCALE,
                    'reddit_odd_memes' => (int) ($configValue('reddit_odd_memes') ?? 5),
                    'subreddits_memes' => preg_split('/[,\r\n]/', $configValue('subreddits_memes') ?? '', -1, PREG_SPLIT_NO_EMPTY) ?: [],
                    'autoban_del_period' => (int) ($configValue('autoban_del_period') ?? self::DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES),
                    'autoban_punishment' => $configValue('autoban_punishment') ?? 'ban',
                    'autoban_mute_days' => (int) ($configValue('autoban_mute_days') ?? self::DEFAULT_AUTOBAN_MUTE_DAYS),
                    'send_voice_update' => filter_var($configValue('send_voice_update') ?? false, FILTER_VALIDATE_BOOLEAN),
                    'welcome_message_active' => filter_var($configValue('welcome_message_active') ?? false, FILTER_VALIDATE_BOOLEAN),
                    'welcome_channel_id' => $configValue('welcome_channel_id'),
                    'welcome_message' => $configValue('welcome_message') ?? '',
                    'trivia_categories' => array_values(array_filter($triviaCategoryIds, 'is_string')),
                    'trivia_questions_per_day' => (int) ($configValue('trivia_questions_per_day') ?? self::DEFAULT_TRIVIA_QUESTIONS_PER_DAY),
                    'admin_channels' => AdminChannel::channelIdsForServer($serverId),
                    'forbidden_channels' => ForbiddenChannel::channelIdsForServer($serverId),
                ],
                'trivia_categories' => TriviaCategory::catalog()->map(static fn (TriviaCategory $category): array => [
                    'id' => (string) $category->id,
                    'short_description' => (string) $category->short_description,
                    'description' => (string) $category->description,
                    'locale' => (string) $category->locale,
                ])->all(),
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
                'locale' => ['required', 'in:'.implode(',', self::SUPPORTED_LOCALES)],
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
                'trivia_categories' => ['required', 'array', 'min:1', 'max:100'],
                'trivia_categories.*' => ['required', 'string', 'uuid', 'distinct'],
                'trivia_questions_per_day' => ['required', 'integer', 'between:1,5'],
                'admin_channels' => ['sometimes', 'array', 'max:500'],
                'admin_channels.*' => ['required', 'string', 'regex:/^[0-9]{17,20}$/', 'distinct'],
                'forbidden_channels' => ['sometimes', 'array', 'max:500'],
                'forbidden_channels.*' => ['required', 'string', 'regex:/^[0-9]{17,20}$/', 'distinct'],
            ]);
            $availableTriviaCategoryIds = TriviaCategory::idsForLocale($data['locale']);
            if (array_diff($data['trivia_categories'], $availableTriviaCategoryIds) !== []) {
                throw ValidationException::withMessages([
                    'trivia_categories' => 'Choose trivia categories available for the selected server language.',
                ]);
            }
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
            $userId = (string) $identity['id'];
            $updated = DB::transaction(function () use ($serverId, $data, $subreddits, $message, $userId): int {
                $updated = Server::updateActiveBy($serverId, $userId);

                if ($updated > 0) {
                    $subredditsValue = implode(',', $subreddits);
                    $configValues = [
                        'locale' => ['string', $data['locale']],
                        'reddit_odd_memes' => ['integer', (string) $data['reddit_odd_memes']],
                        'subreddits_memes' => ['text', $subredditsValue],
                        'autoban_del_period' => ['integer', (string) $data['autoban_del_period']],
                        'autoban_punishment' => ['string', (string) $data['autoban_punishment']],
                        'autoban_mute_days' => ['integer', (string) $data['autoban_mute_days']],
                        'send_voice_update' => ['boolean', $data['send_voice_update'] ? 'true' : 'false'],
                        'welcome_message_active' => ['boolean', $data['welcome_message_active'] ? 'true' : 'false'],
                        'welcome_channel_id' => ['string', $data['welcome_channel_id'] ?: null],
                        'welcome_message' => ['text', $message !== '' ? $message : null],
                        'trivia_categories' => ['text', json_encode(array_values($data['trivia_categories']), JSON_THROW_ON_ERROR)],
                        'trivia_questions_per_day' => ['integer', (string) $data['trivia_questions_per_day']],
                    ];
                    ServerConfig::upsertForServer($serverId, $configValues, $userId);

                    if (array_key_exists('admin_channels', $data)) {
                        AdminChannel::syncForServer($serverId, $data['admin_channels'], $userId);
                    }
                    if (array_key_exists('forbidden_channels', $data)) {
                        ForbiddenChannel::syncForServer($serverId, $data['forbidden_channels'], $userId);
                    }
                }

                return $updated;
            });
            if (! $updated) return response()->json(['message' => 'Could not save configuration for this server.'], 404);

            $key = 'discord-bot:server-settings:v5:'.$botId.':'.$serverId;
            Redis::connection('bot_cache')->del($key);
            Redis::connection('bot_cache')->publish('discord-bot:server-locale-updated', $serverId);
            return response()->json(['ok' => true]);
        } catch (ValidationException $error) {
            throw $error;
        } catch (Throwable $error) {
            Log::error('Could not save server configuration.', ['server_id' => $serverId, 'message' => $error->getMessage()]);
            return response()->json(['message' => 'Could not save server configuration.'], 500);
        }
    }

    public function resetTriviaAnswers(Request $request, string $serverId, DashboardGuilds $dashboardGuilds): JsonResponse
    {
        [$guilds, $error] = $this->verifiedGuilds($request, $dashboardGuilds);
        if ($error) return $error;
        if (! collect($guilds)->contains('id', $serverId)) {
            return response()->json(['message' => 'You no longer have permission to manage this server.'], 403);
        }

        try {
            $identity = $request->attributes->get('dashboard.session')['identity'];
            $deletedAnswers = TriviaMember::resetForServer($serverId);
            $botId = (string) config('services.discord.bot_id');

            if ($botId === '' || $botId === '0') {
                Log::warning('Trivia answers were reset but the leaderboard cache could not be cleared because the Discord bot ID is missing.', [
                    'server_id' => $serverId,
                    'deleted_answers' => $deletedAnswers,
                ]);
            } else {
                try {
                    Redis::connection('bot_cache')->del('discord-bot:trivia-rank:v1:'.$botId.':'.$serverId);
                } catch (Throwable $cacheError) {
                    Log::warning('Trivia answers were reset but the leaderboard cache could not be cleared.', [
                        'server_id' => $serverId,
                        'message' => $cacheError->getMessage(),
                    ]);
                }
            }

            Log::info('Trivia answers reset from dashboard.', [
                'server_id' => $serverId,
                'discord_user_id' => (string) $identity['id'],
                'deleted_answers' => $deletedAnswers,
            ]);

            return response()->json(['ok' => true, 'deleted_answers' => $deletedAnswers]);
        } catch (Throwable $error) {
            Log::error('Could not reset trivia answers.', ['server_id' => $serverId, 'message' => $error->getMessage()]);
            return response()->json(['message' => 'Could not reset trivia answers.'], 500);
        }
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
