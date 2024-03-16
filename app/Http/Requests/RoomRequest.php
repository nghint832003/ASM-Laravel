<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'name' => 'required',
            'status_room' => 'required',
            'price' => 'required',
            'address' => 'required|string',
            'description' => 'required',
            'id_image' => 'required',
            'roomType_id' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập tên',
            'status_room.required' => 'Vui lòng nhập trạng thái',
            'price.required' => "Vui lòng nhập giá",
            'address.required' => 'Vui lòng nhập địa chỉ',
            'description.required' => 'Vui lòng nhập mô tả',
            'id_image.required' => 'Vui lòng chọn ID',
            'roomType_id.required' => 'Vui lòng chọn ID'
        ];

    }
}
