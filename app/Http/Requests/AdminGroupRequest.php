<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminGroupRequest extends FormRequest
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
            'name'      => 'required',
            'sub_name'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Vui lòng nhập tên mặt hàng',
            'sub_name.required' => 'Vui lòng nhập tên phụ',
        ];
    }
}
