<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Habitaciones</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Vista de Habitaciones</h1>
        <a href="{{route('habitaciones.create')}}" class="btn btn-primary mb-3">Nueva Habitación</a>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Número</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($habitaciones as $habitacion)
                <tr>
                    <td>{{ $habitacion->id_habitacion }}</td>
                    <td>{{ $habitacion->numero }}</td>
                    <td>{{ $habitacion->tipo }}</td>
                    <td>${{ number_format($habitacion->precio, 2) }}</td>
                    <td>
                        @if($habitacion->estado == 'Disponible')
                            <span class="badge bg-success">{{ $habitacion->estado }}</span>
                        @elseif($habitacion->estado == 'Ocupada')
                            <span class="badge bg-danger">{{ $habitacion->estado }}</span>
                        @else
                            <span class="badge bg-warning text-dark">{{ $habitacion->estado }}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('habitaciones.show', $habitacion->id_habitacion) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('habitaciones.edit', $habitacion->id_habitacion) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('habitaciones.destroy', $habitacion->id_habitacion) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta habitación?')">Eliminar</button>
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