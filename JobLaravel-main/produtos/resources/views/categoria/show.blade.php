@extends('adminlte::page')

@section('content')
 
        <h1>Produto: {{$categoria->nome}}</h1>

        <b>Nome:</b> {{ $categoria->nome }} <br>
        <br><br>    

        <a class="btn btn-success mt-2" href="{{ route('produto.index') }}">Voltar</a>

@endsection
