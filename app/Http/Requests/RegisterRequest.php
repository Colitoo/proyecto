<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required|string|min:5|max:50',
            'number'=> 'required|string|min:10|max:20|regex:/^\+?[0-9\s\-()]+$/',
            'email' => 'required|email|max:100|unique:personas,email',
            'password' => 'required|string|min:5|confirmed|',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'Debe ingresar su nombre y apellido.',
            'number.regex' => 'Ingresá un número telefónico válido.',
            'number.min' => 'El teléfono debe tener al menos 10 caracteres.',
            'number.max' => 'El teléfono no puede ser mayor de 20 caracteres.',
            'email.required' => 'Debe ingresar un email.',
            'email.email' => 'Debe ingresar un email válido.',
            'email.unique' => 'El email ya está registrado.',
            'password.required' => 'Debe ingresar su contraseña.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ];
    }
}
