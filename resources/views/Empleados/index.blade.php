<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    
    {{-- 💡 USANDO VITE: Eliminamos el CDN para usar los recursos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-light">
    <div class="container mt-5">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-success fw-bold">Gestión de Empleados</h1>
            <a href="{{route('empleados.create')}}" class="btn btn-success btn-lg shadow">
                <i class="bi bi-person-badge me-2"></i> Nuevo Empleado
            </a>
        </div>

        <div class="table-responsive shadow-sm rounded-3">
            <table class="table table-hover table-striped table-borderless align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Email</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                    <tr>
                        <th scope="row">{{ $empleado->id_empleado }}</th>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->apellido }}</td>
                        {{-- Aquí podrías usar Badges para estilizar el puesto --}}
                        <td><span class="badge bg-primary">{{ $empleado->puesto }}</span></td>
                        <td>{{ $empleado->email }}</td>
                        <td>{{ $empleado->telefono }}</td>
                        <td>
                            <div class="d-flex gap-1 justify-content-center">
                                <a href="{{ route('empleados.show', $empleado->id_empleado) }}" class="btn btn-info btn-sm" title="Ver Detalles">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('empleados.edit', $empleado->id_empleado) }}" class="btn btn-warning btn-sm" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('empleados.destroy', $empleado->id_empleado) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar a {{ $empleado->nombre }}?')">
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