<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\Types\String_;

class ViaCep
{
    public function buscar(string $cep)
    {
        /**
         * Conculta CEP no via cep
         * @param string $cep
         * @return void
         */
        $url = sprintf('https://viacep.com.br/ws/%s/json/', $cep);

        $resposta = Http::get($url);

        if($resposta->failed()){
            return false;
        }

        $dados = $resposta->json();

        if(isset($dados['erro']) && $dados['erro'] === true)
        {
            return false;
        }

        return $dados;


    }
}
