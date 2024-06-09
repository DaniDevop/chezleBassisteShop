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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category' => 'required|unique:categories,category|max:255',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'Le nom de la catégorie est obligatoire.',
            'category.string' => 'Le nom de la catégorie doit être une chaîne de caractères.',
            'category.max' => 'Le nom de la catégorie ne peut pas dépasser 255 caractères.',
            'status.required' => 'Le statut est obligatoire.',
            'status.string' => 'Le statut doit être une chaîne de caractères.',
        ];
    }
}
