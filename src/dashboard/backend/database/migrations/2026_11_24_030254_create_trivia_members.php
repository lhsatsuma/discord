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
            $table->uuid('answer');
            $table->string('server');
            $table->string('user_id');
            $table->boolean('correct_answer')->default(false);
            $table->foreign('question')->references('id')->on('trivia_questions');
            $table->foreign('answer')->references('id')->on('trivia_alternatives');
            $table->foreign(['server', 'user_id'])
                ->references(['server', 'user_id'])->on('server_members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trivia_members');
    }
};
