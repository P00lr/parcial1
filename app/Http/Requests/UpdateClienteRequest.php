<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
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
        $id = $this->route('cliente'); // Obtiene el ID del cliente desde la ruta
        return [
            'nombreCompleto' => 'required|string|max:255',
            'telefono' => 'required|string|unique:clientes,telefono,'.$id,
            'email' => 'required|string|email|unique:clientes,email,'.$id,
            'direccion' => 'required|string',
            'genero' => 'required|string',
            'fechaNacimiento' => 'nullable|date',
            'formaPago' => 'nullable|string',
        ];
    }
}
