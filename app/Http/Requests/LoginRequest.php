<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    // public function rules()
    // {


    //     $rules = [
    //         'email' => 'required|email|max:225',
    //         'password' => 'required'
    //     ];

    //     $customMessage = [
    //         'email.required' => 'Email is required',
    //         'email.email' => 'Valid Email is required',
    //         'password.required' => 'Password is required'
    //     ];

    //     return [
    //         'rules' => $rules,
    //         'customMessage' => $customMessage
    //     ];

    // }

 /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|max:225',
            'password' => 'required',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => '*Email is required.',
            'email.email' => '*Valid Email is required.',
            'password.required' => '*Password is required.',
        ];
    }
}
