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
        Schema::create('principals', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Principal's name
            $table->date('promoted_date'); // Date when the principal was promoted
            $table->date('retire_date')->nullable(); // Nullable for active principals
            $table->string('image'); // Image of the principals
            $table->string('biodate'); // Biodate for the principals
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('principals');
    }
};
