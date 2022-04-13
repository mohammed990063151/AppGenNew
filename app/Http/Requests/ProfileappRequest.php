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

            'Name' => 'required|string|max:100',
            'Email'  => 'required|Email|unique:app_profiles,Email',
            // 'app_id'  => 'required|exists:apps,id',
            'Facebook'   => 'required|string|max:50',
            'Snapchat'   => 'required|string|max:50',
            'Instgram'   => 'required|string|max:50',
            'Twitter'   => 'required|string|max:50',
            'TikTok'   => 'required|string|max:50',
            'Social_Media_Icons_Color' => 'required|string|max:50'

        ];

    }
    public function messages()
    {
        return [
            'required' => 'This field is required',
            'in' => 'Incorrect values entered ',
            'Name.string' => 'The name must be letters',
            'Email.max' => 'This field must not be more than 10 characters ',

            'Facebook.max' => 'The name of the applction must not be more than 100 characters ',
            'Snapchat.max' => 'The name of the applction must not be more than 100 characters ',
            'Instgram.max' => 'The name of the applction must not be more than 100 characters ',
            'Twitter.max' => 'The name of the applction must not be more than 100 characters ',
            'TikTok.max' => 'The name of the applction must not be more than 100 characters ',
            'Social_Media_Icons_Color.max' => 'The name of the applction must not be more than 100 characters ',
        ];
    }
}
