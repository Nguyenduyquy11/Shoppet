<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LienHeRequest extends FormRequest
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
            'ho_ten' => 'required',
            'email' => 'required',
            'so_dien_thoai' => 'required',
            'noi_dung' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'ho_ten.required' => 'Họ tên không được để trống',
            'email.required' => 'Email không được để trống',
            'so_dien_thoai.required' => 'Số điện thoại không được để trống',
            'noi_dung.required' => 'Nội dung không được để trống',
        ];
    }
}