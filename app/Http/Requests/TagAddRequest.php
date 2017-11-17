<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagAddRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'txtCateName'=>'required',
            'txtdes'=>'required'
        ];
    }
     public function messages()
    {
        return[
            'txtCateName.required' => 'Vui lòng nhập tên tag',
            'txtdes.required'=> 'Vui lòng nhập mô tả tag',
        ];
    }
}