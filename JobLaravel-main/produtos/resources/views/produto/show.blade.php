@extends('adminlte::page')

@section('content')
 
        <h1>Produto: {{$produto->nome}}</h1>

        <b>Categoria:</b> {{ $produto->categoria->nome }} <br>
        <b>Quantidade:</b> {{ $produto->quantidade }} <br>
        <b>Valor:</b> {{ $produto->valor }} <br>
        <br><br>    

        <a class="btn btn-success mt-2" href="{{ route('produto.index') }}">Voltar</a>

@endsection
