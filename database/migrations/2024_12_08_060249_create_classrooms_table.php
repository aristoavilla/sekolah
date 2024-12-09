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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            // Define foreign key constraint for major_id
            $table->foreignId('major_id')->nullable()->constrained(table: "majors")->cascadeOnDelete();
            // Define foreign key constraint for teacher_id
            $table->foreignId('teacher_id')->nullable()->constrained(table: "teachers")->cascadeOnDelete();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
