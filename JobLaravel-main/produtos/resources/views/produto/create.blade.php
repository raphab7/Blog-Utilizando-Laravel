@extends('adminlte::page')

@section('content')
    <h1>Olá</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>       
    @endif


    <div class="row mb-3">
        <div class="form-row">
            {!! Form::open(['url' => 'produto/create'])!!}
            {!! Form::label('categoria', 'Categoria:' , ['class'=> 'form-label'])!!}<br>
            {!! Form::select('categoria_id', $categorias) !!}<br>
            {!! Form::label('nome', 'Nome:', ['class'=> 'form-label'])!!}<br>
            {!! Form::text('nome')!!}<br>
            {!! Form::label('quantidade', 'Quantidade:' , ['class'=> 'form-label'])!!}<br>
            {!! Form::text('quantidade')!!}<br>
            {!! Form::label('valor', 'valor:' ,['class'=> 'form-label'])!!}<br>
            {!! Form::text('valor')!!}
            {!! Form::submit('enviar',[ 'class' =>'btn btn-danger'])!!}<br>
            {!! Form::close()!!} 
        </div>
    </div>
    <a class="btn btn-success mt-2" href="{{ route('produto.index') }}">Voltar</a>
@endsection