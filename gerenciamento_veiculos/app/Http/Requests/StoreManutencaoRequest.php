<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreManutencaoRequest extends FormRequest
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
            'descricao' => 'required|max:250',
            'custo' => 'required',
            'data_proxima_manutencao' => 'required',
            'data_manutencao' => 'required',
            'tipos_servico_id' => 'required',
            'veiculos_id' => 'required'
        ];
    }
}
