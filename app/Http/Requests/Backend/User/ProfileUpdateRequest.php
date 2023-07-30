<?php

namespace App\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $userId = auth()->user()->id;

        return [
            "name" => 'required',
            "email" => 'required|email',
            "code" => 'required|min:1',
            "mobile" => 'required',
            "position" => 'required',
            "gender" => 'required',
            "age" => 'required',
            "login_name" => 'required',
            "login_email" => 'required|email|unique:users,email,'. $userId,
            "password" => 'nullable|min:6'
        ];
    }
}
