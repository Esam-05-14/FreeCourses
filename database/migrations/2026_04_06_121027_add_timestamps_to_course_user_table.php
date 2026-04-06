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
        Schema::table('course_user', function (Blueprint $table) {
            // This safely adds the created_at and updated_at columns
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::table('course_user', function (Blueprint $table) {
            // This removes them if you ever roll back
            $table->dropTimestamps(); 
        });
    }
};
