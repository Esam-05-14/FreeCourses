<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    /** @use HasFactory<\Database\Factories\RoadmapFactory> */
    use HasFactory;
    public function courses(){
        return $this->belongsToMany(Course::class)
                    ->withPivot('sort_order')
                    ->orderBy('pivot_sort_order', 'asc');
    }

    protected $fillable = [
    'title', 'slug', 'description', 'thumbnail', 
    'url', 'is_published', 'sort_order', 'duration_minutes', 'courses_count'
];


}
