<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monarch Exotics</title>
    </head>

    <body>

        <a href="{{route('comentario.create')}}">Contacto comentario</a> |
        <a href="{{route('productos.create')}}">Crear producto</a>
        
        <hr>
        @if ($tipo == null)
            {{ $tipo = 'Visitantes' }}
        @else
            {{$tipo}}
        @endif  
        <hr>
       
        <h1>Hola, informacion para {{$tipo}}</h1>
        
        @if ($tipo == 'cliente')
            <h2>Cliente</h2>
            <p>Info para clientes</p>
        @elseif ($tipo == 'empresas')     
            <h2>Empresas</h2>
            <p>Info para empleados </p>
        @else
            <h2>Visitantes</h2>
            <p>Info para visitantes </p>
        @endif
        
    </body>

</html>
