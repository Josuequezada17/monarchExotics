<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar comentario</title>
    </head>
    
    <body>

        @include('parciales.formError')
        
        <form action="{{ route('comentario.update', $comentario->id) }}" method="POST">
            @csrf <!--token para asegurarnos que nuestro formulario venga desde nuestra pagina-->
            @method('PATCH')
            
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $comentario->nombre }}">
            <br>
            
            <label for="correo">Correo:</label>
            <input type="email" name="correo" value="{{ $comentario->correo}}">

            <label for="telefono">Telefono:</label>
            <input type="tel" name="telefono" value="{{ $comentario->telefono}}">
            
            <label for="correo">Comentario:</label>
            <textarea name="comentario" id="" cols="30" rows="10">{{ $comentario->comentario }}</textarea>
            <br>
            <select name="ciudad" id="ciudad">
                <option value="" >----</option>
                <option value="GDL" @selected($comentario->ciudad == 'GDL')>GDL</option>
                <option value="TONALA"@selected($comentario->ciudad == 'TONALA')>TONALA</option>
                <option value="ZAPOPAN" @selected($comentario->ciudad == 'ZAPOPAN')>ZAPOPAN</option>
                <option value="TLAQUEPAQUE" @selected($comentario->ciudad == 'TLAQUEPAQUE')>TLAQUEPAQUE</option>
                <option value="TLAJOMULCO" @selected($comentario->ciudad == 'TLAJOMULCO')>TLAJOMULCO</option>
            </select>

            <input type="submit" value="Guardar cambios">
        </form>

        //sanitizar inputs

        //Guardar en db
    
    </body>
</html>