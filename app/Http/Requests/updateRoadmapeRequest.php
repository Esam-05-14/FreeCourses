<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class updateRoadmapeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
        'title' => 'required|string|max:255',
        'slug' => 'required|string|unique:roadmaps,slug',
        'description' => 'nullable|string',
        'thumbnail' => 'nullable|url',
        'url' => 'nullable|url',
        'is_published' => 'boolean',
        'sort_order' => 'integer',
        'courses' => 'nullable|array', // The selected course IDs
        'course_orders' => 'nullable|array', // The order numbers keyed by course ID
    
        ];
    }
}
