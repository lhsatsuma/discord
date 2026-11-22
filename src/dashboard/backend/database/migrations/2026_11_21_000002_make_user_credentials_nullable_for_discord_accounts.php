<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->string('email')->nullable()->change();
            $table->string('password')->nullable()->change();
        });
    }

    public function down(): void
    {
        DB::table('users')->whereNull('email')->orderBy('id')->chunkById(100, function ($users): void {
            foreach ($users as $user) {
                $discordId = $user->discord_id ?? $user->id;
                DB::table('users')->where('id', $user->id)->update([
                    'email' => "discord-{$discordId}@users.invalid",
                ]);
            }
        });

        DB::table('users')->whereNull('password')->orderBy('id')->chunkById(100, function ($users): void {
            foreach ($users as $user) {
                DB::table('users')->where('id', $user->id)->update([
                    'password' => Hash::make(Str::random(64)),
                ]);
            }
        });

        Schema::table('users', function (Blueprint $table): void {
            $table->string('email')->nullable(false)->change();
            $table->string('password')->nullable(false)->change();
        });
    }
};
