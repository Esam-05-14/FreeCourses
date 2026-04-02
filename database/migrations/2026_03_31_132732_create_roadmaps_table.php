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
        Schema::create('roadmaps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title");
            $table->string("slug")->unique();
            $table->text("description")->nullable();

            $table->string('thumbnail')->nullable(); // Path to an uploaded image
            
            // External/Reference Data
            $table->string('url')->nullable(); // If linking to an external site like roadmap.sh
            
            // Admin Controls
            $table->boolean('is_published')->default(false); // So admins can draft roadmaps
            $table->integer('sort_order')->default(0);
            // Cached/Aggregate Data 
            $table->integer('duration_minutes')->default(0); 
            $table->integer('courses_count')->default(0); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roadmaps');
    }
};
