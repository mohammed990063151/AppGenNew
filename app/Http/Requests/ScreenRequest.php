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

            'image' => 'required_without:id|mimes:jpg,jpeg,png',
            // 'screen_type' => 'required',
            'Discrption1st'   => 'required|string|max:100',
            // 'profile_id'  => 'required',
            'Color'   => 'required|string|max:50',
            'ContainarButtonBarColor'   => 'required|string|max:30',
            'IconsBackgroundColor'   => 'required|string|max:30',
            'IconsColor'   => 'required|string|max:20',
            //screen_type

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
