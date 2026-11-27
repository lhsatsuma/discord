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
        Schema::create('trivia_questions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->default('SYSTEM');
            $table->uuid('category');
            $table->text('question');
            $table->text('explanation')->nullable();
            $table->integer('difficulty')->comment('1 - easy, 2 - medium, 3 - hard');
            $table->foreign('category')->references('id')->on('trivia_categorys');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trivia_questions');
    }
};
