<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
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
           'nombre' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:1',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'marca' => 'required|string|max:255',
            'agregado_fecha' => 'required|date',
            'fecha_vencimiento' => 'required|date|after:agregado_fecha',
            'categoria' => 'required|string|max:255',
        ];
    }
}
