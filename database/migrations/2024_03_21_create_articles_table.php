<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('content');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->boolean('status')->default(true);
            $table->json('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}; 