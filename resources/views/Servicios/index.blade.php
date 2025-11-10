<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Servicios</title>
    
    {{-- 💡 USANDO VITE: Eliminamos el CDN para usar los recursos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-light">
    <div class="container mt-5">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-dark fw-bold"><i class="bi bi-gear-wide-connected me-2"></i> Gestión de Servicios</h1>
            <a href="{{route('servicios.create')}}" class="btn btn-primary btn-lg shadow">
                <i class="bi bi-plus-lg me-2"></i> Nuevo Servicio
            </a>
        </div>

        <div class="table-responsive shadow-sm rounded-3">
            <table class="table table-hover table-striped table-borderless align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col" class="w-25">Descripción</th>
                        <th scope="col">Precio</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($servicios as $servicio)
                    <tr>
                        <th scope="row">{{ $servicio->id_servicio }}</th>
                        <td class="fw-semibold">{{ $servicio->nombre }}</td>
                        <td>{{ Str::limit($servicio->descripcion ?? 'Sin descripción', 50) }}</td>
                        <td><span class="badge bg-success">${{ number_format($servicio->precio, 2) }}</span></td>
                        <td>
                            <div class="d-flex gap-1 justify-content-center">
                                <a href="{{ route('servicios.show', $servicio->id_servicio) }}" class="btn btn-info btn-sm" title="Ver Detalles">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('servicios.edit', $servicio->id_servicio) }}" class="btn btn-warning btn-sm" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('servicios.destroy', $servicio->id_servicio) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar el servicio {{ $servicio->nombre }}?')">
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