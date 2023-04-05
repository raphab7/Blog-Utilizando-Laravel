<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
            body{
                text-align:center;
                background-color:#d9d9d9;
            }
    </style>
    <title>Editar a postagem</title>
</head>
<body>


        {!! Form::open(['url' => 'postagem/'. $postagem->id, 'method'=>'put'])!!}
                {!! Form::label('titulo', 'Titulo')!!}<br>
                {!! Form::text('titulo', $postagem->titulo)!!}<br>
                {!! Form::label('conteudo', 'Conteudo')!!}<br>
                {!! Form::text('conteudo', $postagem->conteudo)!!}<br>
                {!! Form::submit('enviar')!!}<br>
                {!! Form::close()!!} 

        <a class="btn btn-success mt-2" href="{{ route('/postagem') }}">Voltar</a>
</body>
</html>