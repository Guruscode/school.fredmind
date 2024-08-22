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
        Schema::create('lesson_assessments', function (Blueprint $table) {
            $table->char('id', 40)->primary();
            $table->char('lesson_id', 40);
            $table->enum('type', ['selection', 'attachment']);
            $table->boolean('graded')->default(0);
            $table->enum('assessment_type', ['bank', 'manual']);
            $table->smallInteger('time_limit_total')->nullable();
            $table->smallInteger('time_limit_question')->nullable();
            $table->smallInteger('questions_total')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->foreign('lesson_id')->references('id')->on('lessons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_assessments');
    }
};
