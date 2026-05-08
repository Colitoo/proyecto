<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class ContactoRequest extends FormRequest
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
            'nombre'=> 'required|string|max:50',
            'email'=> 'required|email|max:100',
            'telefono' => 'required|string|min:10|max:20|regex:/^\+?[0-9\s\-()]+$/',
            'motivo' => 'required|in:stock,envios,seguridad,politicas,otros',
            'plataforma' => 'nullable|in:general,sobremesa,portatiles,mandos',
            'mensaje' => 'required|string|min:5|max:1000',
        ];
    }

    public function messages():array
    {
        return[
            //los otros campos ya se traducen al español
            'email.required' => 'El campo email es obligatorio.',
            'telefono.regex' => 'Ingresá un número telefónico válido.',
            'telefono.min' => 'El teléfono debe tener al menos 10 caracteres.',
            'telefono.max' => 'El teléfono no puede ser mayor de 20 caracteres.',
        ];
    }
}
