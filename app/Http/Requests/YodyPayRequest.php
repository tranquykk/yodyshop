<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YodyPayRequest extends FormRequest
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
            'fullname'  => 'required',
            'phone'     => 'required',
            'address'   => 'required',
            'province'  => 'required',
            'district'  => 'required',
            'ward'      => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Vui lòng nhập Họ tên',
            'phone.required'    => 'Vui lòng nhập số điện thoại',
            'address.required'  => 'Vui lòng nhập địa chỉ',
            'province.required' => 'Bạn chưa chọn tỉnh thành',
            'district.required' => 'Bạn chưa chọn quận huyện',
            'ward.required'     => 'Bạn chưa chọn phường xã',
        ];
    }
}
