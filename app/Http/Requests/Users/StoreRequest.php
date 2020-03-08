<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'dob' => 'required|date',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Không được để trống tên',
            'dob.required' => 'Ngày sinh không được để trống',
            'dob.date' => 'Ngày sinh sai định dạng',
            'email.required' => 'Không được để trống Email',
            'email.email' => 'Email sai định dạng',
            'password.required' => 'Không được để trống Pass',
            'password.min' => 'Password tối thiểu 6 ký tự',

        ];
    }
}
