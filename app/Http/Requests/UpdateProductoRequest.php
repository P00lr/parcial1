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
        $id = $this->route('producto'); // Obtiene el ID del cliente desde la ruta
        return [
            'nombre' => 'required|string|max:255',
            'cantidad' => 'required|number|unique:producto,cantidad|max:255',
            'precio' => 'required|number|unique:producto,precio|max:255',
            'descripcion' => 'required|text|max:255',
            'marca' => 'required|string|text|max:255|unique:producto,marca',
            'agregado_fecha' => 'required|date',
            'fecha_vencimiento' => 'required|date',
            'categoria' => 'required|number|max:255',
        ];
    }
}
