<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="/informacion">Informacion</a>
<a href="{{ route('comentario.index') }}">Listado</a>

    @include('parciales.formError')
    <form action="{{ route('comentario.store') }}" method="POST">
        @csrf <!--token para asegurarnos que nuestro formulario venga desde nuestra pagina-->
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" value="{{ old('correo') }}">
        <br>

        <label for="telefono">Telefono:</label>
        <input type="tel" name="telefono" value="{{ old('telefono') }}" placeholder="(XX) XXXX XXXX">
        <br>

        <label for="comentario">Comentario:</label>
        <br>
        <textarea name="comentario" id="" cols="30" rows="10">{{ old('comentario') }}</textarea>
        <br>

        <select name="ciudad" id="ciudad">
            <option value="GDL" @selected(old('ciudad') == 'GDL')>GDL</option>
            <option value="TONALA" @selected(old('ciudad') == 'TONALA')>TONALA</option>
            <option value="ZAPOPAN" @selected(old('ciudad') == 'ZAPOPAN')>ZAPOPAN</option>
            <option value="TLAQUEPAQUE" @selected(old('ciudad') == 'TLAQUEPAQUE')>TLAQUEPAQUE</option>
            <option value="TLAJOMULCO" @selected(old('ciudad') == 'TLAJOMULCO')>TLAJOMULCO</option>
        </select>

        <input type="submit" value="Enviar">
    </form>

    //sanitizar inputs

    //Guardar en db
 
</body>
</html>