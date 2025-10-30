<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
</head>
<body>
    <div class="container">
        <h1>CREAR UN NUEVO CLIENTE</h1>
        <form id="formulario" method="POST" action="{{route('clientes.store')}}">
            @csrf
            <div>   
                <label for="nombre">NOMBRE:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div>
                <label for="apellido">APELLIDO:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div>
                <label for="email">EMAIL:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="telefono">TELÉFONO:</label>
                <input type="text" id="telefono" name="telefono">
            </div>
            <div>
                <button type="submit">Crear</button>                
            </div>
        </form>
    </div>
    
</body>
</html>