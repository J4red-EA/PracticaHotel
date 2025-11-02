<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Empleado</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Detalles del Empleado</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $empleado->id_empleado }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $empleado->nombre }}</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>{{ $empleado->apellido }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $empleado->email }}</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>{{ $empleado->telefono }}</td>
            </tr>
        </table>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Regresar</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>