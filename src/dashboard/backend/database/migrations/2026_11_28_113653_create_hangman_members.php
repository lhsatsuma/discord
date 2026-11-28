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
        Schema::create('hangman_members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->default('SYSTEM');
            $table->uuid('word');
            $table->uuid('answer')->nullable();
            $table->string('server');
            $table->string('user_id');
            $table->integer('total_guessed')->default(0);
            $table->integer('points')->default(0);
            $table->foreign('word')->references('id')->on('hangman_words');
            $table->foreign(['server', 'user_id'])
                ->references(['server', 'user_id'])->on('server_members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hangman_members');
    }
};
