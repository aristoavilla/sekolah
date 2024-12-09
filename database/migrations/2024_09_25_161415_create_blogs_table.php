<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('blogs', function (Blueprint $table) {
    //         $table->id(); // Primary key
    //         $table->string('title'); // Blog title
    //         $table->string('slug')->unique(); // URL-friendly version of the title
    //         $table->text('excerpt'); // Short description of the blog
    //         $table->longText('content'); // Full blog content
    //         $table->string('image')->nullable(); // Path to the blog image
    //         $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Author of the blog
    //         $table->timestamps(); // Created at and updated at timestamps
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
