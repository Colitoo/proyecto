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
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.string' => 'El campo nombre debe ser una cadena de texto.',
            'nombre.max' => 'El campo nombre no puede tener más de 50 caracteres.',
            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'El campo email debe ser una dirección de correo electrónico válida.',
            'email.max' => 'El campo email no puede tener más de 100 caracteres.',
            'telefono.required' => 'El campo teléfono es obligatorio.',
            'telefono.string' => 'El campo teléfono debe ser una cadena de texto.',
            'telefono.regex' => 'Ingresá un número telefónico válido.',
            'telefono.min' => 'El teléfono debe tener al menos 10 caracteres.',
            'telefono.max' => 'El teléfono no puede ser mayor de 20 caracteres.',
            'motivo.required' => 'El campo motivo es obligatorio.',
            'motivo.in' => 'El campo motivo debe ser uno de los siguientes: stock, envios, seguridad, politicas, otros.',
            'plataforma.in' => 'El campo plataforma debe ser uno de los siguientes: general, sobremesa, portatiles, mandos.',
            'mensaje.required' => 'El campo mensaje es obligatorio.',
            'mensaje.string' => 'El campo mensaje debe ser una cadena de texto.',
            'mensaje.min' => 'El campo mensaje debe tener al menos 5 caracteres.',
            'mensaje.max' => 'El campo mensaje no puede tener más de 1000 caracteres.',
        ];
    }
}
