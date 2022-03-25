@extends('app')

@section('titulo', 'Criar Fornecedor')

@section('conteudo')
    <h1>Cadastrar Fornecedor</h1>
    <form action="{{ route('fornecedores.store') }}" method="POST" enctype="multipart/form-data">
        @include('_form')
    </form>
@endsection
