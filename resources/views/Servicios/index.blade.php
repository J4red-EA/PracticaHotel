<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Servicios</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Vista de Servicios</h1>
        <a href="{{route('servicios.create')}}" class="btn btn-primary mb-3">Nuevo Servicio</a>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->id_servicio }}</td>
                    <td>{{ $servicio->nombre }}</td>
                    <td>{{ $servicio->descripcion ?? 'Sin descripción' }}</td>
                    <td>${{ number_format($servicio->precio, 2) }}</td>
                    <td>
                        <a href="{{ route('servicios.show', $servicio->id_servicio) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('servicios.edit', $servicio->id_servicio) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('servicios.destroy', $servicio->id_servicio) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este servicio?')">Eliminar</button>
                        </form>            
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button onclick="window.history.back()" class="btn btn-secondary">Regresar</button>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>