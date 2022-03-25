<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Services\ViaCep;
use Illuminate\Http\Request;

class BuscaFornecedorCep extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, ViaCep $viaCep)
    {

       $endereco = $viaCep->buscar($request->cep);

       if($endereco === false)
       {
           return response()->json(['erro' =>'Cep inválido'], 400);
       }

       return [
           'fornecedores' => Fornecedor::buscaPorCodigoIbge($endereco['ibge']),
            'quantidade_fornecedores' => Fornecedor::quantidadePorCodigoIbge($endereco['ibge'])
       ];


    }
}
