<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->string('discord_id')->nullable()->unique();
            $table->string('discord_username')->nullable();
            $table->string('discord_global_name')->nullable();
            $table->string('discord_avatar')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->dropUnique(['discord_id']);
            $table->dropColumn([
                'discord_id',
                'discord_username',
                'discord_global_name',
                'discord_avatar',
            ]);
        });
    }
};
