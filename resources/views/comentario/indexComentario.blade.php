<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>Listado comentario</h1>
        <a href="/inicio">Informacion</a>
        <a href="{{ route('comentario.create') }}">Comentario</a>

        <table border="1">
            
            <thead >
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Comentario</th>
                    <th>Fecha creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($comentarios as $comentario)
                    <tr>
                        <td>{{$comentario->nombre}}</td>
                        <td>{{$comentario->correo}}</td>
                        <td>{{$comentario->telefono}}</td>
                        <td>{{$comentario->comentario}}</td>
                        <td>{{ $comentario->created_at }}</td> <!--Para mostrar cuando se creo-->
                        <td><a href="{{route('comentario.show' , $comentario->id)}}">Ver</a> |
                            <a href="{{route('comentario.edit' , $comentario->id)}}">Editar</a>
                            <form action="{{route('comentario.destroy', $comentario) }}" method="POST"> 
                                @csrf 
                                @method('DELETE')
                                <input type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

    </body>
</html>