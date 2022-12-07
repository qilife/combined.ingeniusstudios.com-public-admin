<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterSocialRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            //'password' => 'required|min:6|confirmed',
			//'social_provider' => 'required|string',
			//'social_id' => 'required|string',
            'name' => 'required|string',
            'uuid' => 'string',
            'os' => 'integer',
        ];
    }
}
