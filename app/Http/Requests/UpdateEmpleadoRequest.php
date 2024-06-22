<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmpleadoRequest extends FormRequest
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
            'ci' => 'required|string|unique:empleados,ci,' . $this->route('empleado')->id,
            'telefono' => 'required|string|unique:empleados,telefono,' . $this->route('empleado')->id,
            'fechaNacimiento' => 'required|date',
            'email' => 'required|string|email|max:255|unique:empleados,email,' . $this->route('empleado')->id,
            'direccion' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'salario' => 'required|string|max:255',
        ];
    }
}
