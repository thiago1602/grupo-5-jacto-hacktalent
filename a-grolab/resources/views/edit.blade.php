
@extends('app')

@section('titulo', 'Editar Fornecedor')

@section('conteudo')
    <h1>Editar Fornecedor</h1>
    <form action="{{ route('fornecedores.update', $fornecedor) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('_form')
    </form>
@endsection
