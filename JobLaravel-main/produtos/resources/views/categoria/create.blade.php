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
            {!! Form::open(['url' => 'categoria/create'])!!}
            {!! Form::label('nome', 'Nome:')!!}<br>
            {!! Form::text('nome')!!}<br>
            {!! Form::submit('enviar')!!}<br>
            {!! Form::close()!!} 
        </div>
    </div>
@endsection