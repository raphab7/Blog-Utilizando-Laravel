@extends('adminlte::page')

@section('content')

    <h1>Alterar Produto: {{$categoria->nome}}</h1>
    <div class="row mb-3">
        <div class="form-group">
            {!! Form::open(['url' => 'categoria/'. $categoria->id, 'method'=>'put'])!!}
            {!! Form::label('nome', 'Nome:')!!}<br>
            {!! Form::text('nome', $categoria->nome)!!}<br>
            {!! Form::submit('enviar')!!}<br>
            {!! Form::close()!!} 
        </div>
    </div>
@endsection