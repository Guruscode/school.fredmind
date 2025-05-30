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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('country');
            $table->string('state');
            $table->string('course')->nullable();
            $table->string('cohort')->nullable();
            $table->string('class_format')->nullable();
            $table->string('payment_plan')->nullable();
            $table->string('currency')->nullable();
            $table->string('advisor_id')->nullable();
            $table->string('how_did_you_hear');
            $table->string('password');
            $table->boolean('admission_letter_sent')->default(false);
            $table->string('academic_achievement')->nullable()->after('state_city');
            $table->string('age_range')->nullable()->after('academic_achievement');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
