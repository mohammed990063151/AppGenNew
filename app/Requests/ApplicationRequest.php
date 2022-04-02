<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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

            'image' => 'required_without:id|mimes:jpg,jpeg,png',
            'name' => 'required|string|max:100',
            'link' => 'required|string|max:100',
            // 'version'   => 'required|string|max:50',

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
