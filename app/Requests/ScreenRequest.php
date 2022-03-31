<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScreenRequest extends FormRequest
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

            'screen_image' => 'required_without:id|mimes:jpg,jpeg,png',
            'screen_title' => 'required|string|max:100',
            'screen_body'   => 'required|string|max:100',
            //
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
