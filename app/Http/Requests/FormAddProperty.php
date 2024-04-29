<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class FormAddProperty extends FormRequest
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
    public function rules(Request $request): array
    {
        return [
            'title'=>'required',
            'aera'=>'required',
            'description'=>'required',
            "floors"=>'required',
            "rooms"=>'required',
            "sleeping-rooms"=>'required',
            "specificities"=> "array|exists:specificities,id",
            "heating"=>"required|exists:heatings,id",
            'image1'=>'image',
            'image2'=>'image',
            'image3'=>'image'
        ];
    }
}
