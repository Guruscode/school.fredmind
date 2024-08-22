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
        Schema::create('user_leaderboards', function (Blueprint $table) {
            $table->char('id', 40)->primary();
            $table->char('leaderboard_id', 40)->nullable();
            $table->char('user_id', 40)->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->foreign('leaderboard_id')->references('id')->on('leaderboards');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_leaderboards');
    }
};
