<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomtypeRequest extends FormRequest
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
            'quantity_people' => 'required',
            'quantity_bed' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập tên',
            'quantity_people.required' => 'Vui lòng nhập số người',
            'quantity_bed.requỉed' => 'Vui lòng nhập số giường'
        ];
    }
}
