@extends('adminlte::page')

@section('content')
    
<div class="container">
    <h1>Produtos:</h1>
    <a class="btn btn-success mb-1" href="{{ url('produto/create') }}">CRIAR</a>

    @if (session('status'))
        <div class="alert alert-successes">
            {{session('status')}}
        </div>
    @endif

    <table class="table table-striped table-dark">
        <tr>
            <th>Categoria</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Visualiazar</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
        @foreach ($produto as $item)
            <tr>
                <td>{{ $item->categoria->nome}}</td>
                <td>{{ $item->nome}}</td>
                <td>{{ $item->quantidade}}</td>
                <td>R${{ $item->valor}}</td>
                <td><a class="btn btn-light " href="{{ url('produto/'. $item->id)}}">Visualizar</a></td>
                <td><a class="btn btn-warning " href="{{ url('produto/'. $item->id . '/edit')}}">Editar</a></td>
                <td>
                    {!! Form::open(['url' => 'produto/'. $item->id, 'method' => 'delete']) !!}
                    {!! Form::submit('Excluir', ['class' => 'btn btn-danger'])!!}    
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</div>    
@endsection