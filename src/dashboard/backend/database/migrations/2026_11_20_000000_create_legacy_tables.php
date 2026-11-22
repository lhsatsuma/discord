<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->default('SYSTEM');
            $table->boolean('active')->nullable()->default(true);
            $table->string('name')->nullable();
            $table->integer('reddit_odd_memes')->default(5);
            $table->text('subreddits_memes')->nullable();
            $table->decimal('autoban_del_period', 5, 0)->default(60);
            $table->string('autoban_punishment', 10)->default('ban');
            $table->integer('autoban_mute_days')->default(7);
            $table->boolean('send_voice_update')->default(false);
            $table->boolean('welcome_message_active')->default(false);
            $table->string('welcome_channel_id')->nullable();
            $table->text('welcome_message')->nullable();
        });

        Schema::create('admin_channels', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->nullable()->default('SYSTEM');
            $table->string('server');
            $table->string('channel_id');
            $table->unique(['server', 'channel_id'], 'admin_channels_unique');
            $table->foreign('server', 'fk_admin_channels_server')->references('id')->on('servers');
        });

        Schema::create('server_members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->default('SYSTEM');
            $table->string('server')->nullable();
            $table->string('user_id')->nullable();
            $table->string('username')->nullable();
            $table->date('birthdate')->nullable();
            $table->unique(['server', 'user_id'], 'server_members_unique');
            $table->unique(['server', 'user_id'], 'unq_server_members');
            $table->foreign('server', 'fk_server_members_server')->references('id')->on('servers');
        });

        Schema::create('channels_forbidden', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->nullable()->default('SYSTEM');
            $table->string('server');
            $table->string('channel_id');
            $table->unique(['server', 'channel_id'], 'channels_forbidden_unique');
            $table->foreign('server', 'fk_channels_forbidden_server')->references('id')->on('servers');
        });

        Schema::create('birthday_channels', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->nullable()->default('SYSTEM');
            $table->string('server');
            $table->string('channel_id');
            $table->unique(['server', 'channel_id'], 'birthday_channels_unique');
            $table->foreign('server', 'fk_birthday_channels_server')->references('id')->on('servers');
        });

        Schema::create('hangman', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->default('SYSTEM');
            $table->string('server', 36)->nullable();
            $table->string('user_id', 36)->nullable();
            $table->string('last_msg_id', 36)->nullable();
            $table->string('status')->nullable();
            $table->text('word_json')->nullable();
            $table->string('word')->nullable();
            $table->integer('win')->nullable();
            $table->text('letters')->nullable();
            $table->text('guessed')->nullable();
            $table->string('hints')->nullable();
            $table->unique(['server', 'user_id'], 'hangman_unique');
            $table->foreign(['server', 'user_id'], 'fk_hangman_server_members')
                ->references(['server', 'user_id'])->on('server_members');
        });

        Schema::create('jankenpon', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->default('SYSTEM');
            $table->string('server');
            $table->string('user_id');
            foreach (['played_rock', 'played_scissors', 'played_paper', 'win_rock', 'win_scissors', 'win_paper', 'lose_rock', 'lose_scissors', 'lose_paper', 'draw_rock', 'draw_scissors', 'draw_paper'] as $column) {
                $table->integer($column)->nullable()->default(0);
            }
            $table->unique(['server', 'user_id'], 'jankenpon_unique');
            $table->foreign('server', 'fk_jankenpon_server')->references('id')->on('servers');
        });

        Schema::create('jokes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->nullable()->default('SYSTEM');
            $table->string('locale', 10);
            $table->string('server')->nullable();
            $table->text('content')->nullable();
            $table->index(['locale', 'server'], 'jokes_locale_idx');
            $table->foreign('server', 'fk_jokes_server')->references('id')->on('servers');
        });

        Schema::create('memes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->default('SYSTEM');
            $table->string('server')->nullable();
            $table->integer('order_id')->nullable();
            $table->string('description')->nullable();
            $table->string('content')->nullable();
            $table->unique(['server', 'order_id'], 'memes_unique');
            $table->foreign('server', 'fk_memes_server')->references('id')->on('servers');
        });

        Schema::create('pickup_lines', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->nullable()->default('SYSTEM');
            $table->string('locale', 10);
            $table->string('server')->nullable();
            $table->text('content')->nullable();
            $table->index(['locale', 'server'], 'pickup_lines_locale_idx');
            $table->foreign('server', 'fk_pickup_lines_server')->references('id')->on('servers');
        });

        Schema::create('tic_tac_toe', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->default('SYSTEM');
            $table->string('server')->nullable();
            $table->string('user_id')->nullable();
            $table->string('against', 36);
            $table->string('status')->nullable();
            $table->string('win', 36)->nullable();
            $table->string('level')->nullable();
            $table->text('played_spots')->nullable();
            $table->foreign(['server', 'user_id'], 'fk_tic_tac_toe_server_members')
                ->references(['server', 'user_id'])->on('server_members');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tic_tac_toe');
        Schema::dropIfExists('pickup_lines');
        Schema::dropIfExists('memes');
        Schema::dropIfExists('jokes');
        Schema::dropIfExists('jankenpon');
        Schema::dropIfExists('hangman');
        Schema::dropIfExists('birthday_channels');
        Schema::dropIfExists('channels_forbidden');
        Schema::dropIfExists('server_members');
        Schema::dropIfExists('admin_channels');
        Schema::dropIfExists('servers');
    }
};
