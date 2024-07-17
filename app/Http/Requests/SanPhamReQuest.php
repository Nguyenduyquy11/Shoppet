<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamReQuest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ten_san_pham' => 'required|max:255',
            'so_luong' => 'required|numeric|min:1',
            'gia_san_pham' => 'required|numeric|min:1|max:99999999999',
            'gia_khuyen_mai' => 'required|numeric|min:1|max:99999999999',
            'ngay_nhap' => 'required|date',
            'danh_muc_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'ten_san_pham.required' => 'Tên sản phẩm bắt buộc điền',
            'ten_san_pham.max' => 'Tên sản phẩm không quá 255 kí tự',
            'so_luong.required' => 'Số lượng không được bỏ trống',
            'so_luong.numeric' => 'Số lượng phải là số',
            'so_luong.min' => 'Số lượng phải lớn hơn 0',
            'gia_san_pham.required' => 'Giá sản phẩm bắt buộc điền',
            'gia_san_pham.numeric' => 'Giá sản phẩm phải là số',
            'gia_san_pham.min' => 'Giá sản phẩm không hợp lệ',
            'gia_san_pham.max' => 'Giá sản phẩm không quá 99.999.999.999',
            'gia_khuyen_mai.required' => 'Giá sản phẩm bắt buộc điền',
            'gia_khuyen_mai.numeric' => 'Giá sản phẩm phải là số',
            'gia_khuyen_mai.min' => 'Giá sản phẩm không hợp lệ',
            'gia_khuyen_mai.max' => 'Giá sản phẩm không quá 99.999.999.999',
            'ngay_nhap.required' => 'Ngày nhập bắt buộc điền',
            'ngay_nhap.date' => 'phải đúng định dạng',
            'danh_muc_id.required' => 'Trạng thái bắt buộc điền',
        ];
    }
}
