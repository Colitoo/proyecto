<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CompraRequest extends FormRequest
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
            'direccion'      => 'required|string|max:255',
            'codigo_postal'  => 'required|string|max:20',
            'ciudad'         => 'required|string|max:100',
            'provincia'      => 'required|string|max:100',
            'tarjeta_nombre' => 'required|string|max:255',
            'tarjeta_numero' => 'required|digits:16',
            'tarjeta_vence'  => 'required|string|max:5',
            'tarjeta_cvc'    => 'required|digits_between:3,4',
        ];
    }

    public function messages()
    {
        return [
            'direccion.required'      => 'La dirección es obligatoria.',
            'codigo_postal.required'  => 'El código postal es obligatorio.',
            'ciudad.required'         => 'La ciudad es obligatoria.',
            'provincia.required'      => 'La provincia es obligatoria.',
            'tarjeta_nombre.required' => 'El nombre en la tarjeta es obligatorio.',
            'tarjeta_numero.required' => 'El número de tarjeta es obligatorio.',
            'tarjeta_numero.digits'   => 'El número de tarjeta debe tener exactamente 16 dígitos.',
            'tarjeta_vence.required'  => 'La fecha de vencimiento es obligatoria.',
            'tarjeta_cvc.required'    => 'El código CVC es obligatorio.',
            'tarjeta_cvc.digits_between' => 'El código CVC debe tener entre 3 y 4 dígitos.',
        ];
    }
}
