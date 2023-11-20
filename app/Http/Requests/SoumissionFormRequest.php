<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoumissionFormRequest extends FormRequest
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
            'user_id' => ['unique:soumissions'],
            'pj' => ['mimes:pdf,doc,docx,ppt,pptx'],
        ];
    }
}
