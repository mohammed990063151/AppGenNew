<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplctionRequest extends FormRequest
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

            'Logo' => 'required_without:id|mimes:jpg,jpeg,png',
            'AppName' => 'required|string|max:100',
            'Link' => 'required|string|max:100',
            'Discrptions' => 'required|string|max:100',
            'Phone' => 'required|string|max:100',
            // 'Splash_Screen' => 'required|string|max:100',
            'WhatsApp' => 'required|string|max:100',

        ];
    }
    public function messages()
    {
        return [
            'required' => 'This field is required',
            'in' => 'Incorrect values entered ',
            'name.string' => 'The name must be letters',
            'abbr.max' => 'This field must not be more than 10 characters ',

            'name.max' => 'The name of the applction must not be more than 100 characters ',
        ];
}
}
