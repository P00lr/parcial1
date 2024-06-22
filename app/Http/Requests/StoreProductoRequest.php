<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Producto;

class StoreProductoRequest extends FormRequest
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
            'cantidad' => 'required|number|unique:producto,cantidad|max:255',
            'precio' => 'required|number|unique:producto,precio|max:255',
            'descripcion' => 'required|text|max:255',
            'marca' => 'required|string|text|max:255|unique:producto,marca',
            'agregado_fecha' => 'required|date',
            'fecha_vencimiento' => 'required|date',
            'categoria' => 'required|number|max:255',
        ];
    }

    public function messages()
    {
            return [
                'cantidad.required' => 'Cantidad cantidad es obligatorio.',
                'cantidad.unique' => 'Cantidad ya ha sido registrado.',
                //-------------------------------------------
                'descripcion.required' => 'Descripcion obligatorio.',
                'descripcion.unique' => 'Descripcion ya ha sido registrado.',
                //------------------------------------------- 
                'marca.required' => 'La marca es obligatorio.',
                'marca.unique' => 'marca ya ha sido registrado.', 
                //--------------------------------------------------------
                'agregado_fecha.required' => 'la fecha de ingreso es obligatorio.',
                //-----------------------------------------------------------------
                'fecha_vencimiento.required' => 'La fecha de vencimiento es obligatorio.',
                //-----------------------------------------------------------
                'categoria.required' => 'La categoria es obligatorio.',
                //----------------------------------------------
                
                
            ];
    }

    
}
