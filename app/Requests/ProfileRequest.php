<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [


            'orgname' => 'required|string|max:100',
            'orgemail'  => 'required|email|unique:profile,email,',
            'app_id'  => 'required|exists:application,id',
            'ogwhatsapp'   => 'required|string|max:50',

        ];
    }
    public function messages()
    {
        return [
            'required' => 'This field is required',
            'in' => 'Incorrect values entered ',
            'orgname.string' => 'The name must be letters',
            'orgemail.max' => 'This field must not be more than 10 characters ',

            'ogwhatsapp.max' => 'The name of the applction must not be more than 100 characters ',
        ];
    }
}
