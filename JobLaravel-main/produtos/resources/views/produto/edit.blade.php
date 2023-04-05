@extends('adminlte::page')

@section('content')

        <h1 class="font-monospace">Alterar Produto: {{$produto->nome}}</h1>
        <div class="form-group">
            {!! Form::open(['url' => 'produto/'. $produto->id, 'method'=>'put'])!!}

            {!! Form::label('categoria', 'Categoria:')!!}<br>
            {!! Form::select('categoria_id', $categorias, $produto->categoria->categoria_id) !!}<br>

            {!! Form::label('nome', 'Nome:')!!}<br>
            {!! Form::text('nome', $produto->nome)!!}<br>

            {!! Form::label('quantidade', 'Quantidade:')!!}<br>
            {!! Form::text('quantidade', $produto->quantidade)!!}<br>

            {!! Form::label('valor', 'valor:')!!}<br>
            {!! Form::text('valor', $produto->valor)!!}

            {!! Form::submit('enviar')!!}<br>
            {!! Form::close()!!} 
            <a class="btn btn-success mt-2" href="{{ route('produto.index') }}">Voltar</a>
        </div>
@endsection