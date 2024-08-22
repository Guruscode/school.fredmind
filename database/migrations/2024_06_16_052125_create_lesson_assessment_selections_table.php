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
        Schema::create('lesson_assessment_selections', function (Blueprint $table) {
            $table->char('id', 40)->primary();
            $table->char('question_id', 40)->nullable();
            $table->text('title');
            $table->boolean('answer')->default(0);
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->foreign('question_id')->references('id')->on('lesson_assessment_questions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_assessment_selections');
    }
};
