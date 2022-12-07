<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsoleRegisterRequest extends FormRequest
{
	//protected $connection= 'console';
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
            'email' => 'required|email|unique:console.users',
            'password' => 'required|min:6|confirmed',
            'name' => 'required|string',
            'uuid' => 'string',
            'os' => 'integer',
			'phone' => 'integer|min:10|max:10',
        ];
    }
}
