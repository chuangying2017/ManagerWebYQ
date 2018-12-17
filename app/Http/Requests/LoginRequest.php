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
            'username'        =>  'required|min:6|exists:users,mobile',
            'password'        =>  'required|min:6',
            'captcha'         =>  'required|captcha'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '用户名必须',
            'username.min'  => '用户长度不小于6位',
            'password.required' => '密码必须',
            'password.min' => '密码长度最低6位'
        ];
    }
}
