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
        Schema::create('program_settings', function (Blueprint $table) {
            $table->char('id', 40)->primary();
            $table->char('program_id', 40);
            $table->char('certificate', 40)->nullable();
            $table->json('compulsory_courses')->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_settings');
    }
};
