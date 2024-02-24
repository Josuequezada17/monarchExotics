<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacion de comentario</title>
</head>
<body>
    <h1>Comentario ID {{ $comentario->id }}</h1>
    <ul>
        <li>Nombre: {{ $comentario->nombre }}</li>
        <li>Correo: {{ $comentario->correo }}</li>
        <li>Telefono: {{ $comentario->telefono }}</li>
        <li>Comentario: {{ $comentario->comentario }}</li>
        <li>Ciudad: {{ $comentario->ciudad }}</li>
    </ul>  
    <a href="{{route('comentario.index')}}">Regresar</a>  
</body>
</html>