<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formFilter extends FormRequest
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
            'minAera' => 'nullable|numeric|min:0',
            'rooms' => 'nullable|numeric|min:0',
            'maxPrice' => 'nullable|numeric|min:0',
            'keyword' => 'nullable|string|max:255'
        ];
    }
}
