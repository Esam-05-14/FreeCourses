<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    // protected $fillable = ["title", "description", "ingredients", "instructions", "cooking_time", "difficulty", "image_path", "user_id"];

    public function language(){
        return $this->belongsTo(Language::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }

    
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function roadmaps(){
        return $this->belongsToMany(Roadmap::class)->withPivot("sort_order");
    }
    public function user()
    {
        return $this->belongsTo(User::class)->withPivot('status','last_accessed_at')->withTimestamps();
    }
}
