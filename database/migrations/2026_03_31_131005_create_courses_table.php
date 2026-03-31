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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug")->unique();
            $table->foreignId('language_id')->constrained()->cascadeOnDelete();
            $table->text("description")->nullable();
            $table->string("provider");
            $table->string("url");
            $table->string("thumbnail")->nullable();
            $table->integer("duration")->default(0);
            $table->enum("difficulty", ['Beginner', 'Advanced', 'Intermediate']);
            $table->boolean("is_published")->default(false);
            $table->boolean("is_featured")->default(false);
            $table->integer("view_count")->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
