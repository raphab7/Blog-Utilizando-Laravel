<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body{
                background-color:#d9d9d9;
            }
        </style>
        <title>Postagens</title>
    </head>
    <body>
        <h1>Suas Postagens:</h1><br>

        <a class="btn btn-success " href="{{ url('postagem/create') }}">CRIAR</a>

        <table class="table table-striped table-dark container-sm">
            <tr>
                <th scoper="col" >id</th>
                <th scoper="col" >Título</th>
                <th scoper="col" >Visualizar</th>
                <th scoper="col">Editar</th>
                <th scoper="col" >Deletar</th>
            </tr>
        @foreach ($postagens as $value)
        <tr>
            <td class="align-middle">{{ $value->id }}</td>
            <td class="align-middle">{{ $value->titulo }}</td>
            <td class="align-middle"><a style=text-decoration:none; class="link-info" href="{{ url('postagem/' . $value->id) }}">Visualizar</a></td>
            <td class="align-middle">
                <a style=text-decoration:none; class="link-success " href="{{url('postagem/' . $value->id . '/edit')}}">Editar</a>
            </td>    
            <td class="align-middle">
                <form action="{{ url('postagem/' . $value->id) }}" method="POST" class="ms-2">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger delete-btn"> 
                            Deletar
                            </button>
                </form>
            </td>
        </tr>
        @endforeach
        </table>

</body>
</html>
