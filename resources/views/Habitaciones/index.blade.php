<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Habitaciones</title>
    
    {{-- 💡 USANDO VITE: Eliminamos el CDN para usar los recursos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-light">
    <div class="container mt-5">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary fw-bold"><i class="bi bi-house-door-fill me-2"></i> Gestión de Habitaciones</h1>
            <a href="{{route('habitaciones.create')}}" class="btn btn-primary btn-lg shadow">
                <i class="bi bi-plus-lg me-2"></i> Nueva Habitación
            </a>
        </div>

        <div class="table-responsive shadow-sm rounded-3">
            <table class="table table-hover table-striped table-borderless align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Número</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Precio</th>
                        <th scope="col" class="text-center">Estado</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($habitaciones as $habitacion)
                    <tr>
                        <th scope="row">{{ $habitacion->id_habitacion }}</th>
                        <td>{{ $habitacion->numero }}</td>
                        <td><span class="badge bg-secondary">{{ $habitacion->tipo }}</span></td>
                        <td><span class="fw-bold">${{ number_format($habitacion->precio, 2) }}</span></td>
                        <td class="text-center">
                            {{-- Lógica de Badges (etiquetas) mejorada para consistencia --}}
                            @if(strtolower($habitacion->estado) == 'disponible')
                                <span class="badge bg-success">Disponible</span>
                            @elseif(strtolower($habitacion->estado) == 'ocupada')
                                <span class="badge bg-danger">Ocupada</span>
                            @else
                                <span class="badge bg-warning text-dark">Mantenimiento</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex gap-1 justify-content-center">
                                <a href="{{ route('habitaciones.show', $habitacion->id_habitacion) }}" class="btn btn-info btn-sm" title="Ver Detalles">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('habitaciones.edit', $habitacion->id_habitacion) }}" class="btn btn-warning btn-sm" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('habitaciones.destroy', $habitacion->id_habitacion) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar la habitación {{ $habitacion->numero }}?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>            
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">
            <i class="bi bi-arrow-left me-1"></i> Regresar al Menú Principal
        </a>
    </div>
</body>
</html>