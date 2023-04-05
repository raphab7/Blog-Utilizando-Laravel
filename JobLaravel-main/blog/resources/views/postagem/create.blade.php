<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Postagens</title>
        <style>
            body{
                text-align:center;
                background-color:#d9d9d9;
            }
        </style>
        </head>
        <body>
 
        CRIAR:<br>
        

         

        <div class="row mb-3">
            <div class="form-group">
                {!! Form::open(['url' => 'postagem/create'])!!}
                {!! Form::label('titulo', 'Titulo')!!}<br>
                {!! Form::text('titulo')!!}<br>
                {!! Form::label('conteudo', 'Conteudo')!!}<br>
                {!! Form::text('conteudo')!!}<br>
                {!! Form::submit('enviar')!!}<br>
                {!! Form::close()!!} 
            </div>
        </div>

        <a class="btn btn-success mt-2" href="{{ route('/postagem') }}">Voltar</a>
    </body>
</html>
