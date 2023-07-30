<?php

namespace App\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
        return [
            "name" => 'required',
            "email" => 'required|email',
            "code" => 'required|min:1',
            "mobile" => 'required',
            "position" => 'required',
            "age" => 'required',
            "gender" => 'required',
            "department_id" => 'required',
            "login_name" => 'required',
            "login_email" => 'required|email|unique:users,email',
            "password" => 'required|min:6',
            "roles" => "required|array"
        ];
    }
}
