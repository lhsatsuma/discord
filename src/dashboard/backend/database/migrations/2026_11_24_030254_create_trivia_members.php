<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trivia_members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->default('SYSTEM');
            $table->uuid('question');
            $table->uuid('answer')->nullable();
            $table->string('server');
            $table->string('user_id');
            $table->boolean('correct_answer')->default(false);
            $table->boolean('answered')->default(false);
            $table->decimal('seconds_spent', 8, 3)->nullable();
            $table->decimal('points', 12, 3)->default(0);
            $table->foreign('question')->references('id')->on('trivia_questions');
            $table->foreign('answer')->references('id')->on('trivia_alternatives');
            $table->foreign(['server', 'user_id'])
                ->references(['server', 'user_id'])->on('server_members');
            $table->index(['server', 'user_id', 'created_at'], 'trivia_members_daily_limit_idx');
            $table->index(['server', 'user_id', 'question', 'answered'], 'trivia_members_question_progress_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trivia_members', function (Blueprint $table): void {
            $table->dropIndex('trivia_members_daily_limit_idx');
            $table->dropIndex('trivia_members_question_progress_idx');
        });
        Schema::dropIfExists('trivia_members');
    }
};
