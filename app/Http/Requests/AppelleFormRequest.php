<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppelleFormRequest extends FormRequest
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
            'title' => ['required','min:5'],
            'description' => ['min:10'],
            // 'date' => 'required|date_format:Y-m-d',
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'pj' => ['mimes:pdf,doc,docx,ppt,pptx'],
        ];
    }
}
