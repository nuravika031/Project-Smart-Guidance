<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MajorRequest extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'profile' => 'nullable|string',
            'study_duration' => 'nullable|string|max:50',
        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists' => 'Kategori tidak valid.',
            'name.required' => 'Nama jurusan wajib diisi.',
            'name.string' => 'Nama jurusan harus berupa string.',
            'name.max' => 'Nama jurusan tidak boleh lebih dari 255 karakter.',
            'description.string' => 'Deskripsi harus berupa string.',
            'profile.string' => 'Profile harus berupa string.',
            'study_duration.string' => 'Durasi study harus berupa string.',
            'study_duration.max' => 'Durasi study tidak boleh lebih dari 50 karakter.',
        ];
    }
}
