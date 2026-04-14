<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class storeCourseRequest extends FormRequest
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
        // $table->id();
    //         $table->string("title");
    //         $table->string("slug")->unique();
    //         $table->foreignId('language_id')->constrained()->cascadeOnDelete();
    //         $table->text("description")->nullable();
    //         $table->string("provider");
    //         $table->string("url");
    //         $table->string("thumbnail")->nullable();
    //         $table->integer("duration")->default(0);
    //         $table->enum("difficulty", ['Beginner', 'Advanced', 'Intermediate']);
    //         $table->boolean("is_published")->default(false);
    //         $table->boolean("is_featured")->default(false);
    //         $table->integer("view_count")->default(0);
    //         $table->timestamps();
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:courses,slug|max:255',
            'url' => 'required|url',
            'provider' => 'required|string',
            'language_id' => 'required|exists:languages,id',
            'difficulty' => 'required|in:Beginner,Intermediate,Advanced',
            'duration' => 'nullable|integer|min:0',
            'thumbnail' => 'nullable|url', // <-- Make sure this expects a URL, not an image file!
            'description' => 'nullable|string',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
            'categories' => 'required|array|min:1', // Ensures they pick at least one category
            'categories.*' => 'exists:categories,id',
        ];
    }
}
