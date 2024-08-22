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
        Schema::create('lesson_videos', function (Blueprint $table) {
            $table->char('id', 40)->primary();
            $table->char('lesson_id', 40);
            $table->string('lesson_url', 255);
            $table->char('lesson_asset', 40);
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
        Schema::dropIfExists('lesson_videos');
    }
};
