<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GopyEditRequest extends FormRequest
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
            'name' =>'required',
            'email' =>'required|email',
            'message' =>'required',
            ];

    }
        
    public function messages(){
        return[
        'name.required' => 'Vui lòng nhập họ tên',
        'email.required' => 'Vui lòng nhập email',
        'email.email' => 'Vui lòng nhập đúng định dạng email',
        'message.required' => 'Vui lòng nhập nội dung',
       
        ];
    }
}
