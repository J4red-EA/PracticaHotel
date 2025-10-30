<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos del Cliente</title>
</head>
<body>
    <h1>Datos del Cliente</h1>
    <p>ID: {{$cliente->id_cliente}}</p>
    <p>Nombre: {{$cliente->nombre}}</p>
    <p>Apellido: {{$cliente->apellido}}</p>
    <p>Email: {{$cliente->email}}</p>
    <p>Teléfono: {{$cliente->telefono}}</p>
    <button onclick="window.history.back()">Regresar</button>
</body>
</html>