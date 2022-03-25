@extends('app')

@section('titulo', 'Página Inicial')

@section('conteudo')
    <h1>Lista de Fornecedores</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Razão Social</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>

        @forelse($fornecedores as $fornecedor)
            <tr>
                <th scope="row">{{ $fornecedor->id }}</th>
                <td>{{ $fornecedor->razao_social }}</td>
                <td>{{ \Clemdesign\PhpMask\Mask::apply ($fornecedor->telefone,'(00) 0000-0000') }}</td>
                <td>
                    <a href="{{ route('fornecedores.edit', $fornecedor) }}" class="btn btn-primary">Atualizar</a>
                    <a href="{{ route('fornecedores.destroy', $fornecedor) }}" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</a>
                </td>
            </tr>
        @empty
            <tr>
                <th></th>
                <td>Nenhum registro cadastrado</td>
                <td></td>
                <td></td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <a href="{{ route('fornecedores.create') }}" class="btn btn-success">Novo fornecedor</a>
@endsection

