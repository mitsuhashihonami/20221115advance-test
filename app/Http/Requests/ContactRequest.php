<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|size:8',
            'address' => 'required',
            'opinion' => 'required',


        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => '必須項目です',
            'email.required' => '必須項目です',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required' =>'必須項目です',
            'postcode.size:8' => 'ハイフンありの8文字で入力してください',
            'address.required' => '必須項目です',
            'opinion.required' => '必須項目です',

        ];
    }
}
