@extends('adminlte::page')

@section('content')
    <h1>Produtos:</h1>

    <a class="btn btn-success " href="{{ url('categoria/create') }}">CRIAR</a>

    @if (session('status'))
        <div class="alert alert-successes">
            {{session('status')}}
        </div>
    @endif

    <table class="table table-striped table-dark">
        <tr>
            <th>Nome</th>
            <th>Visualiazar</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
        @foreach ($categoria as $item)
            <tr>
                <td>{{ $item->nome}}</td>
                <td><a class="btn btn-success " href="{{ url('categoria/'. $item->id)}}">Visualizar</a></td>
                <td><a class="btn btn-success " href="{{ url('categoria/'. $item->id . '/edit')}}">Editar</a></td>
                <td>
                    {!! Form::open(['url' => 'categoria/'. $item->id, 'method' => 'delete']) !!}
                        {!! Form::submit('Excluir')!!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection