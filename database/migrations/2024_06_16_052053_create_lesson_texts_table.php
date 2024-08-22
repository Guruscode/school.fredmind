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
        Schema::create('lesson_texts', function (Blueprint $table) {
            $table->char('id', 40)->primary();
            $table->char('lesson_id', 40);
            $table->text('data');
            $table->boolean('questions_attachment')->default(0);
            $table->char('questions_id', 40)->nullable();
            $table->boolean('graded')->default(0);
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
        Schema::dropIfExists('lesson_texts');
    }
};
