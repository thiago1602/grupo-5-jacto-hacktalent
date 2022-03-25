<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{

    use HasFactory;

    protected $table = "fornecedores";


    /**
     * definem os campos que podem ser gravados
     * @var string[]
     */
    protected $fillable = ['razao_social', 'cnpj', 'email', 'telefone',
        'logradouro', 'numero', 'complemento','bairro', 'cep', 'cidade',
        'estado', 'codigo_ibge', 'foto_estabelecimento'];

    /**
     * adiciona campos na serializacao
     * @var string[]
     */
    protected $appends = ['reputacao'];

    /**
     * definem os campos que serão usados na serialização
     * @var string[]
     */
    protected  $visible = ['razao_social', 'cidade', 'logradouro', 'bairro', 'numero', 'foto_estabelecimento', 'reputacao'];

    /**
     * Monta a url da imagem
     * @param string $valor
     * @return string
     */
    public function getFotoEstabelecimentoAttribute(string $valor)
    {
        return config('app.url') . '/' . $valor;

    }

    /**
     * Retorna a reputacao
     * @param $valor
     * @return int
     */

    public function getReputacaoAttribute($valor)
    {
        return mt_rand(1, 5);
    }

    /**
     * Busca fornecedores por cod ibge
     * @param int $codigoIbge
     * @return mixed
     */
        static public function buscaPorCodigoIbge(int $codigoIbge)
        {
            return self::where('codigo_ibge', $codigoIbge)->limit(6)->get();

        }



    /**
     * retorna fornecedores por CODIGO IBGE
     * @param int $codigoIbge
     * @return int
     */
        static public function quantidadePorCodigoIbge(int $codigoIbge)
        {
            $quantidade = self::where('codigo_ibge', $codigoIbge)->count();

            return $quantidade > 6 ? $quantidade - 6 : 0;

        }
}
