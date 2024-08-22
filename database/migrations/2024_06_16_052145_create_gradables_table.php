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
        Schema::create('gradables', function (Blueprint $table) {
            $table->char('id', 40)->primary();
            $table->enum('resource', ['program', 'course', 'lesson'])->default('lesson');
            $table->enum('lesson_type', ['video', 'text', 'assessment_selection', 'assessment_attachment']);
            $table->integer('points');
            $table->json('meta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gradables');
    }
};
