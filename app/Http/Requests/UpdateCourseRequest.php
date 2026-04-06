<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class updateCourseRequest extends FormRequest
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
        'url' => 'required|url',
        'provider' => 'required|string',
        'language_id' => 'required|exists:languages,id',
        'difficulty' => 'required|in:Beginner,Intermediate,Advanced',
        'duration' => 'nullable|integer|min:0',
        'thumbnail' => 'nullable|url', 
        'description' => 'nullable|string',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'categories' => 'required|array|min:1', // Ensures they pick at least one category
        'categories.*' => 'exists:categories,id',
    ];
}
}
