<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de la Habitación</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Detalles de la Habitación</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $habitacion->id_habitacion }}</td>
            </tr>
            <tr>
                <th>Número</th>
                <td>{{ $habitacion->numero }}</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>{{ $habitacion->tipo }}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{ $habitacion->precio }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ $habitacion->estado }}</td>
            </tr>
        </table>
        <a href="{{ route('habitaciones.index') }}" class="btn btn-secondary">Regresar</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>