<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    public function messages(){
        return[
            'email.required' => 'Không được để trống Email',
            'email.email' => 'Email sai định dạng',
            'password.required' => 'Không được để trống Password',
            'password.min' => 'Password tối thiểu 6 ký tự',

        ];
    }
}
