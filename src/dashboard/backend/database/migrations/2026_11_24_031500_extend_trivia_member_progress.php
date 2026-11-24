<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('trivia_members', function (Blueprint $table): void {
            $table->uuid('answer')->nullable()->change();
            $table->boolean('answered')->default(false);
            $table->decimal('seconds_spent', 8, 3)->nullable();
            $table->decimal('points', 12, 3)->default(0);
            $table->index(['server', 'user_id', 'created_at'], 'trivia_members_daily_limit_idx');
            $table->index(['server', 'user_id', 'question', 'answered'], 'trivia_members_question_progress_idx');
        });

        DB::table('trivia_members')->whereNotNull('answer')->update(['answered' => true]);
    }

    public function down(): void
    {
        DB::table('trivia_members')->whereNull('answer')->delete();

        Schema::table('trivia_members', function (Blueprint $table): void {
            $table->dropIndex('trivia_members_daily_limit_idx');
            $table->dropIndex('trivia_members_question_progress_idx');
            $table->dropColumn(['answered', 'seconds_spent', 'points']);
            $table->uuid('answer')->nullable(false)->change();
        });
    }
};
