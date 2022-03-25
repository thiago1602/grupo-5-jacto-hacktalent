<?php

namespace App\Http\Requests;

use App\Rules\ValidaCep;
use App\Services\ViaCep;
use Illuminate\Foundation\Http\FormRequest;

class FornecedorRequest extends FormRequest
{
    protected ViaCep $viaCep;

    public function __construct(ViaCep $viaCep)
    {
        $this->viaCep = $viaCep;


    }
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
     * @return array
     */
    public function rules()
    {
        $regras = [
            'razao_social' => ['required', 'max:100'],
            'cnpj' => ['required', 'max:18'],
            'email' => ['required', 'email',  'max:100'],
            'telefone' => ['required', 'max:15'],
            'logradouro' => ['required', 'max:255'],
            'numero' => ['required', 'max:20'],
            'bairro' => ['required', 'max:50'],
            'cidade' => ['required', 'max:50'],
            'estado' => ['required', 'size:2'],
            'cep' => ['required', new ValidaCep($this->viaCep)],
            'foto_estabelecimento' => ['image']
        ];

        if($this->isMethod('post'))
        {
            $regras['foto_estabelecimento'] = ['required', 'image'];

        }

        return $regras;
    }
}
