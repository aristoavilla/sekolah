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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Primary key of the post
            $table->string('title'); // Title of the post
            $table->string('slug', 255)->index(); // Slug of the post
            $table->string('image')->nullable(); // The image of the post, it's optional to be filled
            $table->longText('content'); // The body or the content of the post, it is considered as a long text type because it would contain so many texts
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // This would be related to the users table because the post would be made by a user. If a user is deleted, as well as the post is deleted
            $table->timestamp('published_at')->nullable(); // Shows when was/is the post published
            $table->timestamps(); // when is this post created or updated
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
