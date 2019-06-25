<?php

namespace Nautic\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateModelRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'name.max' => 'El campo Nombre no puede exceder los 255 caracteres',
        ];
    }
}