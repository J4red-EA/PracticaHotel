<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <div class="container">
        <h1>EDITAR CLIENTE</h1>
        <form id="formulario" method="POST" action="{{route('clientes.update', $cliente->id_cliente)}}">
            @csrf            
            <div>   
                <label for="nombre">NOMBRE:</label>
                <input type="text" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
            </div>
            <div>
                <label for="apellido">APELLIDO:</label>
                <input type="text" id="apellido" name="apellido" value="{{ $cliente->apellido }}" required>
            </div>
            <div>
                <label for="email">EMAIL:</label>
                <input type="email" id="email" name="email" value="{{ $cliente->email }}" required>
            </div>
            <div>
                <label for="telefono">TELÉFONO:</label>
                <input type="text" id="telefono" name="telefono" value="{{ $cliente->telefono }}">
            </div>
            <div>
                @method('PUT')
                <button type="submit">Actualizar</button>                
            </div>
        </form>
    </div>
    
</body>
</html>