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
        Schema::create('gradings', function (Blueprint $table) {
            $table->char('id', 40)->primary();
            $table->char('gradable_id', 40);
            $table->char('user_id', 40);
            $table->integer('points');
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->foreign('gradable_id')->references('id')->on('gradables');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gradings');
    }
};
