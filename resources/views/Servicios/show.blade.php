<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del servicio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalles del Servicio</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $servicio->id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $servicio->nombre }}</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>{{ $servicio->descripcion }}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{ $servicio->precio }}</td>
            </tr>
        </table>
        <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Regresar</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>