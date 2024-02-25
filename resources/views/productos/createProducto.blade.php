<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>
        <a href="/inicio">Informacion</a>
        <a href="{{ route('productos.index') }}">Listado de exotics</a>

        @include('parciales.formError')
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf <!--token para asegurarnos que nuestro formulario venga desde nuestra pagina-->
            
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}">
            <br>

            <label for="marca">Marca:</label>
            <input type="text" name="marca" value="{{ old('marca') }}">
            <br>

            <label for="traccion">Traccion:</label>
            <select name="traccion" id="traccion">
                <option value="DELANTERA - FWD" @selected(old('traccion') == 'DELANTERA - FWD')>TRACCION DELANTERA FWD</option>
                <option value="TRASERA - RWD" @selected(old('traccion') == 'TRASERA - RWD')>TRACCION TRASERA RWD</option>
                <option value="TOTAL - 4WD" @selected(old('traccion') == 'TOTAL - 4WD')>TRACCION TOTAL 4WD</option>
            </select>
            <br>

            <label for="motor">Motor:</label>
            <input type="text" name="motor" value="{{ old('motor') }}" placeholder="V(-) Delantero Natural (0.0)L">
            <br>

            <label for="potencia">Potencia:</label>
            <input type="number" name="potencia" value="{{ old('potencia') }}" placeholder="0 HP">
            <br>

            <label for="torque">Torque:</label>
            <input type="number" name="torque" value="{{ old('torque') }}" placeholder="0 Lb">
            <br>

            <label for="velocidad_maxima">Velocidad maxima:</label>
            <input type="number" name="velocidad_maxima" value="{{ old('velocidad_maxima') }}" placeholder="0 km/h">
            <br>

            <label for="precio">Precio:</label>
            <input type="number" name="precio" value="{{ old('precio') }}" placeholder="$ 0">
            <br>

            <label for="year">Año:</label>
            <input type="number" name="year" value="{{ old('year') }}" placeholder="0000">
            <br>

            <label for="descripcion">Descripcion:</label>
            <br>
            <textarea name="descripcion" id="" cols="30" rows="10">{{ old('descripcion') }}</textarea>
            <br>

            <input type="submit" value="Enviar">
        </form>
    
    </body>
</html>