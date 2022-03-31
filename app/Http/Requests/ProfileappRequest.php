<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileappRequest extends FormRequest
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
            'orgname' => 'required|string|max:100',
            'orgemail'  => 'required|email|unique:app_profiles',
            'app_id'  => 'required|exists:apps,id',
            'ogwhatsapp'   => 'required|string|max:50',
            'color'   => 'required|string|max:50',
            'sc'   => 'required|string|max:50',
            'pc'   => 'required|string|max:50',
        ];

    }
    public function messages()
    {
        return [
            'required' => 'This field is required',
            'in' => 'Incorrect values entered ',
            'name.string' => 'The name must be letters',
            'email.max' => 'This field must not be more than 10 characters ',

            'whatsapp.max' => 'The name of the applction must not be more than 100 characters ',
        ];
    }
}
