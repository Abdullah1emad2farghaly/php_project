<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            "name" => "required|string|max:100|unique:categories,name," . $this->id,
            "description" => "nullable|string|max:1000",
        ];
    }

    /**
     * Messages
     */
    public function messages(): array
    {
        return [
            "name.required" => "Name Required",
            "name.string" => "Name must be string",
            "name.max" => "very long name",
            "name.unique" => "the name is existing",
            "description.string" => "Description must be string",
            "description.max" => "very long description",
        ];
    }
}
