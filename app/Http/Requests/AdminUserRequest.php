<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username'   => 'required|unique:users',
            'fullname'   => 'required',
            'password'   => 'required|min:6',
            'repassword' => 'same:password',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Vui lòng nhập tên đăng nhập',
            'username.unique'   => 'Tên đăng nhập đã tồn tại',
            'fullname.required' => 'Vui lòng nhập họ tên',
            'password.required' => 'Vui lòng nhập nhập khẩu',
            'password.min'      => 'Vui lòng nhập ít nhất :min kí tự',
            'repassword.same'   => 'Xác nhận mật khẩu không đúng',
        ];
    }
}
