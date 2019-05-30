<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email'=>'required|email:users,email',
                'username'=>'required',
       
                'phone'=>'required',
                'address'=>'required'
        ];
    }
    public function message(){
        return [
            
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            
            'username.required'=>'Vui lòng nhập số điện thoại',
            
            
            'phone.required'=>'Vui lòng nhập số điện thoại',
            'address.required'=>'Vui lòng nhập Address'
        ];
    }

}
