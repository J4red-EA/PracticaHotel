<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    
    {{-- 💡 USANDO VITE: Eliminamos asset() para usar los recursos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <div class="container mt-5">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary fw-bold">Gestión de Clientes</h1>
            <a href="{{route('clientes.create')}}" class="btn btn-success btn-lg shadow">
                <i class="bi bi-person-plus-fill me-2"></i> Nuevo Cliente
            </a>
        </div>
        
        <div class="table-responsive shadow-sm rounded-3">
            <table class="table table-hover table-striped table-borderless align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <th scope="row">{{ $cliente->id_cliente }}</th>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>
                            <div class="d-flex gap-1 justify-content-center">
                                <a href="{{ route('clientes.show', $cliente->id_cliente) }}" class="btn btn-info btn-sm" title="Ver Detalles">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('clientes.edit', $cliente->id_cliente) }}" class="btn btn-warning btn-sm" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('clientes.destroy', $cliente->id_cliente) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar a {{ $cliente->nombre }}?')">
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
        
        <button onclick="window.location='{{ route('dashboard') }}'" class="btn btn-secondary mt-3">
            <i class="bi bi-arrow-left me-1"></i> Regresar al Menú Principal
        </button>
    </div>
</body>
</html>