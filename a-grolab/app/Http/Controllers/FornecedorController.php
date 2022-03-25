<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedorRequest;
use App\Models\Fornecedor;
use App\Services\ViaCep;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    protected ViaCep $viaCep;

    public function __construct(ViaCep $viaCep)
    {
        $this->viaCep = $viaCep;
    }
    /*
     * Lista os fornecedores
     */
    public function index()
    {
        $fornecedores = Fornecedor::get();
        return view('index', [
            'fornecedores' => $fornecedores
        ]);
    }

    /*
     * Mostra o formulario de criação
     */

    public function create()
    {
        return view('create');
    }

    /*
     * Cria um fornecedor no banco de dados
     */
    public function store(FornecedorRequest $request)
    {
        $dados = $request->except('_token');
        $dados['foto_estabelecimento'] = $request->foto_estabelecimento->store('public');

        //salva no banco sem os caracteres especiais
        $dados['cnpj'] = str_replace(['.', '/', '-'], '', $dados['cnpj']);
        $dados['cep'] = str_replace('-', '', $dados['cep']);
        $dados['telefone'] = str_replace(['(', ')',' ', '-'],'', $dados['telefone']);
        $dados['codigo_ibge'] = $this->viaCep->buscar($dados['cep']) ['ibge'];
        Fornecedor::create($dados);

        return redirect()->route('fornecedores.index');
    }

    /*
     * Mostra o formulario de edição
     */
    public function edit(int $id)
    {
        $fornecedor = Fornecedor::findOrfail($id);

        return view('edit', [
            'fornecedor' => $fornecedor
        ]);
    }

    /*
     * Atualiza um fornecedor no banco de dados
     */
    public function update(int $id, FornecedorRequest $request)
    {

        $fornecedor = Fornecedor::findOrfail($id);

        $dados = $request->except('_token', '_method');

        $dados['cnpj'] = str_replace(['.', '/', '-'], '', $dados['cnpj']);
        $dados['cep'] = str_replace('-', '', $dados['cep']);
        $dados['telefone'] = str_replace(['(', ')',' ', '-'],'', $dados['telefone']);
        $dados['codigo_ibge'] = $this->viaCep->buscar($dados['cep']) ['ibge'];


        if($request->hasFile('foto_estabelecimento')){
            $dados['foto_estabelecimento'] = $request->foto_estabelecimento->store('public');
        }

        //atualiza o fornecedor
        $fornecedor->update($dados);

        return redirect()->route('fornecedores.index');

    }

    /*
     * Exclui um fornecedor no banco de dados
     */
    public function destroy(int $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);

        $fornecedor->delete();

        return redirect()->route('fornecedores.index');
    }
}
