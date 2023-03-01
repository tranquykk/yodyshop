<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminProductRequest extends FormRequest
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
            'name'          => 'required',
            'product_detail'=> 'required',
            'picture'       => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Vui lòng nhập tên sản phẩm',
            'product_detail.required'=> 'Vui lòng nhập chi tiết sản phẩm',
            'picture.required'=> 'Vui lòng chọn hình ảnh',
        ];
    }
}
