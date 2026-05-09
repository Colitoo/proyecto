<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class LoginRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'=>'required|email|max:100',
            'password'=>'required|string|min:5',
        ];
    }

    public function messages(): array{
        return[
            'email.required'=>'Debe ingresar su email.',
            'email.email'=>'Debe ingresar un email válido.',
            'password.required'=>'Debe ingresar su contraseña.',
        ];
    }
}
