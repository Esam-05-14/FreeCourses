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
        Schema::create('course_raodmap', function (Blueprint $table) {
            $table->foreignId('roadmap_id')->constrained()->cascadeOnDelete();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();

            // This is crucial for Roadmaps! It determines the order of the courses (Step 1, Step 2, etc.)
            $table->integer('sort_order')->default(0);

            // Prevent duplicate courses in the same roadmap
            $table->primary(['roadmap_id', 'course_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_raodmap');
    }
};
