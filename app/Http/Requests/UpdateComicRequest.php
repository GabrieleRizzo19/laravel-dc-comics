<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:40',
            'description' => 'required|min:10',
            'thumb' => 'required|active_url',
            'price' => 'required',
            'series' => 'required|min:2|max:20',
            'sale_date' => 'required|date',
            'type' => 'required'
        ];
    }

    /**
     * Get the validation message
     * 
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo  è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno 5 caratteri',
            'title.max' => 'Il titolo non può essere più lungo di 40 caratteri'
        ];
    }
}
