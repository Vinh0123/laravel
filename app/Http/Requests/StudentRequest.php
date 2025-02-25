<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
           'name' => 'required|min:1',
            'age' => 'required|integer|between:10,30',
            'date' => 'required|integer|',
            'phone' => 'required|digits:10',
            'address' => 'required|min:10',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên học sinh.',
            'name.min' => 'Tên học sinh phải có ít nhất 1 ký tự.',
            'age.required' => 'Vui lòng nhập tuổi học sinh.',
            'age.integer' => 'Tuổi học sinh phải là một số nguyên.',
            'age.between' => 'Tuổi học sinh phải nằm trong khoảng từ 10 đến 30.',
            'date.required' => 'Vui lòng nhập ngày sinh.',
            'date.integer' => 'Ngày sinh phải là một số nguyên.',
            'phone.required' => 'Vui lòng nhập'
        ];
        }
}
