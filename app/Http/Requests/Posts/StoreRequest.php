<?php

namespace App\Http\Requests\Posts;

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
            'title' => 'required',
            'content' => 'required|min:20',
            'time' => 'required|date',
        ];
    }

    public function messages(){
        return[
            'title.required' => 'Không được để trống tiêu đề',
            'content.required' => 'Không được để trống nội dung',
            'content.min' => 'Nội dung không được ít hơn 20 ký tự',
            'time.required' => 'Không được để trống thời gian',
            'time.date' => 'Thời gian sai định dạng',
        ];
    }
}
