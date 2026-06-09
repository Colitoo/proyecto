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
            'name.string'=>'El nombre debe ser una cadena de texto.',
            'name.min'=>'El nombre debe tener al menos 5 caracteres.',
            'name.max'=>'El nombre no puede tener más de 50 caracteres.',
            'number.required' => 'Debe ingresar su número de teléfono.',
            'number.string' => 'El número de teléfono debe ser una cadena de texto.',
            'number.regex' => 'Ingresá un número telefónico válido.',
            'number.min' => 'El teléfono debe tener al menos 10 caracteres.',
            'number.max' => 'El teléfono no puede ser mayor de 20 caracteres.',
            'email.required' => 'Debe ingresar un email.',
            'email.email' => 'Debe ingresar un email válido.',
            'email.max' => 'El email no puede tener más de 100 caracteres.',
            'email.unique' => 'El email ya está registrado.',
            'password.required' => 'Debe ingresar su contraseña.',
            'password.string' => 'La contraseña debe ser una cadena de texto.',
            'password.min' => 'La contraseña debe tener al menos 5 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ];
    }
}
