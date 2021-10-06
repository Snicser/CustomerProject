<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'firstname' => [
                'required',
                'max: 255'
            ],
            'lastname' => 'required|max: 255',
            'email' => 'required|email|max: 255',
            'password' => 'required|confirmed',
            'phonenumber' => 'regex:/06([0-9]{8})/',
            'role_id' => [
                'numeric'
            ]
        ];
    }
}
