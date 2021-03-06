<?php

namespace banruou\Http\Requests;

use banruou\Http\Requests\Request;

class LoginRequest extends Request
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
            'username'=>'required',
            'password'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required'=>'Chưa nhập tên',
            'password.required'=>'Chưa nhập mật khẩu',
        ];
    }
}
