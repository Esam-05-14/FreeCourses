<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewFactory> */
    use HasFactory;

    // 1-to-N (Inverse): This review belongs to ONE user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 1-to-N (Inverse): This review belongs to ONE course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
