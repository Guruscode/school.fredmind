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
        Schema::create('leaderboards', function (Blueprint $table) {
            $table->char('id', 40)->primary();
            $table->char('program_id', 40)->nullable();
            $table->char('course_id', 40)->nullable();
            $table->char('lesson_id', 40)->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('lesson_id')->references('id')->on('lessons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaderboards');
    }
};
