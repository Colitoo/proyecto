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
            'direccion.string'        => 'La dirección debe ser una cadena de texto.',
            'direccion.max'           => 'La dirección no puede tener más de 255 caracteres.',
            'codigo_postal.required'  => 'El código postal es obligatorio.',
            'codigo_postal.string'    => 'El código postal debe ser una cadena de texto.',
            'codigo_postal.max'       => 'El código postal no puede tener más de 20 caracteres.',
            'ciudad.required'         => 'La ciudad es obligatoria.',
            'ciudad.string'           => 'La ciudad debe ser una cadena de texto.',
            'ciudad.max'              => 'La ciudad no puede tener más de 100 caracteres.',
            'provincia.required'      => 'La provincia es obligatoria.',
            'provincia.string'        => 'La provincia debe ser una cadena de texto.',
            'provincia.max'           => 'La provincia no puede tener más de 100 caracteres.',
            'tarjeta_nombre.required' => 'El nombre en la tarjeta es obligatorio.',
            'tarjeta_nombre.string'   => 'El nombre en la tarjeta debe ser una cadena de texto.',
            'tarjeta_nombre.max'      => 'El nombre en la tarjeta no puede tener más de 255 caracteres.',
            'tarjeta_numero.required' => 'El número de tarjeta es obligatorio.',
            'tarjeta_numero.digits'   => 'El número de tarjeta debe tener exactamente 16 dígitos.',
            'tarjeta_numero.numeric'   => 'El número de tarjeta debe ser numerico.',
            'tarjeta_vence.required'  => 'La fecha de vencimiento es obligatoria.',
            'tarjeta_vence.digits_between'    => 'La fecha de vencimiento debe tener entre 3 y 5 caracteres.',
            'tarjeta_vence.numeric' => 'La fecha de vencimiento debe ser numérica.',
            'tarjeta_cvc.required'    => 'El código CVC es obligatorio.',
            'tarjeta_cvc.digits_between' => 'El código CVC debe tener entre 3 y 4 dígitos.',
            'tarjeta_cvc.numeric' => 'El código CVC debe ser numérico.',
        ];
    }
}
