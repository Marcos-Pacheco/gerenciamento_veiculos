<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVeiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'modelo' => 'required|max:250',
            'marca' => 'required|max:250',
            'placa' => 'required|max:250',
            'cor' => 'required|max:100',
            'quilometragem' => 'required',
            'ano' => 'required|min:0|max:9999',
            'tipos_veiculo_id' => 'required'
        ];
    }
}
