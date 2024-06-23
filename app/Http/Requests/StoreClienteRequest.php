<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombreCompleto' => 'required|string|max:255',
            'telefono' => 'required|string|unique:clientes',
            'email' => 'required|string|email|unique:clientes',
            'direccion' => 'required|string',
            'genero' => 'required|string',
            'fechaNacimiento' => 'required|nullable|date',
            'formaPago' => 'required|nullable|string',
        ];
    }

    public function messages()
    {
            return [
                'nombreCompleto.required' => 'Anote su nombre completo por favor',
                //-----------------------------------------------------
                'telefono.required' => 'El telefono es obligatorio.',
                'telefono.unique' => 'El telefono ya ha sido registrado.', 
                //--------------------------------------------------------
                'email.required' => 'El email es obligatorio.',
                'email.unique' => 'El email ya ha sido registrado.',
                //-------------------------------------------
                'direccion.required' => 'La direccion es obligatorio.',
                //-----------------------------------------------------------------
                'genero.required' => 'El genero es obligatorio.',
                //------------------------------------------- 
                'fechaNacimiento.required' => 'la fecha de nacimiento es obligatorio.',
                //-----------------------------------------------------------
                'formaPago.required' => 'La forma de pago es obligatorio.',
                //----------------------------------------------
                
            ];
    }
}
