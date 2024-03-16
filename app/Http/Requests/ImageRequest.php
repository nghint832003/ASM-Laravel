<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'img1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(){
        return [
            'img1.required' => 'Vui lòng nhập ảnh.',
            'img1.image' => 'File phải là ảnh.',
            'img1.mimes' => 'Phải thuộc các loại file: jpeg, png, jpg, gif.',
            'img1.max' => 'Ảnh phải dưới 2MB.',

            'img2.required' => 'Vui lòng nhập ảnh.',
            'img2.image' => 'File phải là ảnh.',
            'img2.mimes' => 'Phải thuộc các loại file: jpeg, png, jpg, gif.',
            'img2.max' => 'Ảnh phải dưới 2MB.',

            'img3.required' => 'Vui lòng nhập ảnh.',
            'img3.image' => 'File phải là ảnh.',
            'img3.mimes' => 'Phải thuộc các loại file: jpeg, png, jpg, gif.',
            'img3.max' => 'Ảnh phải dưới 2MB.',

            'img4.required' => 'Vui lòng nhập ảnh.',
            'img4.image' => 'File phải là ảnh.',
            'img4.mimes' => 'Phải thuộc các loại file: jpeg, png, jpg, gif.',
            'img4.max' => 'Ảnh phải dưới 2MB.',
        ];
    }
}
