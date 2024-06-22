<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleadoRequest extends FormRequest
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
            'ci' => 'required|string|unique:empleados,ci|max:255',
            'telefono' => 'required|string|unique:empleados,telefono|max:255',
            'fechaNacimiento' => 'required|date',
            'email' => 'required|string|email|max:255|unique:empleados,email',
            'direccion' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'salario' => 'required|string|max:255',
        ];
    }
}
