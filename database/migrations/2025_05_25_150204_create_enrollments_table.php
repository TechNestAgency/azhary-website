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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->integer('age')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('arabic_level'); // Arabic proficiency level
            $table->string('package'); // Changed from enum to string to accommodate course types
            $table->text('course_details')->nullable();
            $table->json('preferred_days')->nullable();
            $table->json('preferred_times')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
