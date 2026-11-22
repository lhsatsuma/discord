<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private const CONFIG_CODES = [
        'reddit_odd_memes', 'subreddits_memes',
        'autoban_del_period', 'autoban_punishment', 'autoban_mute_days',
        'send_voice_update', 'welcome_message_active', 'welcome_channel_id', 'welcome_message',
    ];

    public function up(): void
    {
        DB::table('servers')->orderBy('id')->chunk(500, static function ($servers): void {
            $records = [];

            foreach ($servers as $server) {
                $createdBy = $server->created_by ?: 'SYSTEM';
                $createdAt = $server->created_at ?: now();
                $updatedAt = $server->updated_at ?: $createdAt;
                $redditOdds = (int) ($server->reddit_odd_memes ?? 5);
                $subreddits = (string) ($server->subreddits_memes ?? '');
                $sendVoiceUpdate = in_array(strtolower((string) $server->send_voice_update), ['1', 't', 'true', 'yes', 'on'], true);
                $welcomeMessageActive = in_array(strtolower((string) $server->welcome_message_active), ['1', 't', 'true', 'yes', 'on'], true);

                // Preserve custom legacy settings. Default values remain sparse
                // and are supplied by the application when no config row exists.
                if ($redditOdds !== 5) {
                    $records[] = [
                        'server_id' => (string) $server->id,
                        'config_code' => 'reddit_odd_memes',
                        'created_at' => $createdAt,
                        'updated_at' => $updatedAt,
                        'created_by' => $createdBy,
                        'type' => 'integer',
                        'value' => (string) $redditOdds,
                        'long_value' => null,
                    ];
                }

                if ($subreddits !== '') {
                    $isShortValue = mb_strlen($subreddits) <= 255;
                    $records[] = [
                        'server_id' => (string) $server->id,
                        'config_code' => 'subreddits_memes',
                        'created_at' => $createdAt,
                        'updated_at' => $updatedAt,
                        'created_by' => $createdBy,
                        'type' => 'text',
                        'value' => $isShortValue ? $subreddits : null,
                        'long_value' => $isShortValue ? null : $subreddits,
                    ];
                }

                $legacyValues = [
                    'autoban_del_period' => ['integer', (string) ($server->autoban_del_period ?? 60), (int) ($server->autoban_del_period ?? 60) !== 60],
                    'autoban_punishment' => ['string', (string) ($server->autoban_punishment ?? 'ban'), ($server->autoban_punishment ?? 'ban') !== 'ban'],
                    'autoban_mute_days' => ['integer', (string) ($server->autoban_mute_days ?? 7), (int) ($server->autoban_mute_days ?? 7) !== 7],
                    'send_voice_update' => ['boolean', $sendVoiceUpdate ? 'true' : 'false', $sendVoiceUpdate],
                    'welcome_message_active' => ['boolean', $welcomeMessageActive ? 'true' : 'false', $welcomeMessageActive],
                    'welcome_channel_id' => ['string', $server->welcome_channel_id, $server->welcome_channel_id !== null && $server->welcome_channel_id !== ''],
                    'welcome_message' => ['text', $server->welcome_message, $server->welcome_message !== null && $server->welcome_message !== ''],
                ];

                foreach ($legacyValues as $configCode => [$type, $value, $isCustom]) {
                    if (! $isCustom) continue;

                    $value = (string) $value;
                    $isShortValue = mb_strlen($value) <= 255;
                    $records[] = [
                        'server_id' => (string) $server->id,
                        'config_code' => $configCode,
                        'created_at' => $createdAt,
                        'updated_at' => $updatedAt,
                        'created_by' => $createdBy,
                        'type' => $type,
                        'value' => $isShortValue ? $value : null,
                        'long_value' => $isShortValue ? null : $value,
                    ];
                }
            }

            if ($records !== []) {
                DB::table('server_config')->upsert(
                    $records,
                    ['server_id', 'config_code'],
                    ['updated_at', 'created_by', 'type', 'value', 'long_value']
                );
            }
        });

        Schema::table('servers', function (Blueprint $table): void {
            $table->dropColumn([
                'reddit_odd_memes', 'subreddits_memes',
                'autoban_del_period', 'autoban_punishment', 'autoban_mute_days',
                'send_voice_update', 'welcome_message_active', 'welcome_channel_id', 'welcome_message',
            ]);
        });
    }

    public function down(): void
    {
        $missingColumns = array_values(array_filter([
            'reddit_odd_memes', 'subreddits_memes',
            'autoban_del_period', 'autoban_punishment', 'autoban_mute_days',
            'send_voice_update', 'welcome_message_active', 'welcome_channel_id', 'welcome_message',
        ], static fn (string $column): bool => ! Schema::hasColumn('servers', $column)));

        if ($missingColumns !== []) {
            Schema::table('servers', function (Blueprint $table) use ($missingColumns): void {
                if (in_array('reddit_odd_memes', $missingColumns, true)) $table->integer('reddit_odd_memes')->default(5);
                if (in_array('subreddits_memes', $missingColumns, true)) $table->text('subreddits_memes')->nullable();
                if (in_array('autoban_del_period', $missingColumns, true)) $table->decimal('autoban_del_period', 5, 0)->default(60);
                if (in_array('autoban_punishment', $missingColumns, true)) $table->string('autoban_punishment', 10)->default('ban');
                if (in_array('autoban_mute_days', $missingColumns, true)) $table->integer('autoban_mute_days')->default(7);
                if (in_array('send_voice_update', $missingColumns, true)) $table->boolean('send_voice_update')->default(false);
                if (in_array('welcome_message_active', $missingColumns, true)) $table->boolean('welcome_message_active')->default(false);
                if (in_array('welcome_channel_id', $missingColumns, true)) $table->string('welcome_channel_id')->nullable();
                if (in_array('welcome_message', $missingColumns, true)) $table->text('welcome_message')->nullable();
            });
        }

        DB::table('servers')->orderBy('id')->chunk(500, static function ($servers): void {
            foreach ($servers as $server) {
                $configs = DB::table('server_config')
                    ->where('server_id', (string) $server->id)
                    ->whereIn('config_code', self::CONFIG_CODES)
                    ->get()
                    ->keyBy('config_code');

                $values = [];

                foreach (self::CONFIG_CODES as $configCode) {
                    $config = $configs->get($configCode);
                    if (! $config) continue;

                    $value = $config->long_value ?? $config->value;
                    $values[$configCode] = match ($configCode) {
                        'reddit_odd_memes' => (int) ($value ?? 5),
                        'subreddits_memes', 'welcome_channel_id', 'welcome_message' => $value,
                        'autoban_del_period' => (int) ($value ?? 60),
                        'autoban_punishment' => $value ?? 'ban',
                        'autoban_mute_days' => (int) ($value ?? 7),
                        'send_voice_update', 'welcome_message_active' => filter_var($value, FILTER_VALIDATE_BOOLEAN),
                    };
                }

                if ($values !== []) {
                    DB::table('servers')->where('id', (string) $server->id)->update($values);
                }
            }
        });

        DB::table('server_config')->whereIn('config_code', self::CONFIG_CODES)->delete();
    }
};
