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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_fr')->nullable();
            $table->string('photo')->nullable();
            $table->text('short_description');
            $table->text('short_description_fr')->nullable();
            $table->text('full_bio');
            $table->text('full_bio_fr')->nullable();
            $table->text('languages')->nullable(); // Changed from JSON to text for rich text editor
            $table->text('languages_fr')->nullable();
            $table->text('certifications')->nullable(); // Changed from JSON to text for rich text editor
            $table->text('certifications_fr')->nullable();
            $table->text('teaching_methods');
            $table->text('teaching_methods_fr')->nullable();
            $table->text('materials_used');
            $table->text('materials_used_fr')->nullable();
            $table->decimal('rating', 3, 2)->default(0);
            $table->integer('total_reviews')->default(0);
            $table->integer('total_teaching_hours')->default(0);
            $table->integer('years_experience')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
