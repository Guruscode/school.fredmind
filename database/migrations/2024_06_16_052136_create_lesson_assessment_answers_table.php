<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lesson_assessment_answers', function (Blueprint $table) {
            $table->char('id', 40)->primary();
            $table->char('question_id', 40)->nullable();
            $table->char('user_id', 40);
            $table->enum('answer_type', ['selection', 'text', 'file']);
            $table->text('answer');
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->foreign('question_id')->references('id')->on('lesson_assessment_questions');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_assessment_answers');
    }
};
