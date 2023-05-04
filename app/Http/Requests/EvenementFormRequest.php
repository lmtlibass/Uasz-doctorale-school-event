<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvenementFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:5'],
            'description' => ['required', 'min:10'],
            // 'date' => 'required|date_format:Y-m-d',
            'media' => ['required','image','max:2048'],
        ];
    }
}
