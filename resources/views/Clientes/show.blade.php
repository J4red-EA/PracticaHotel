<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Cliente</title>
    
    {{-- 💡 USANDO VITE: Eliminamos el CDN para usar Bootstrap local --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-info text-white py-3">
                        <h3 class="mb-0"><i class="bi bi-person-lines-fill me-2"></i> Información del Cliente</h3>
                    </div>
                    <div class="card-body p-4">
                        
                        {{-- Usamos list-group para un aspecto más estructurado --}}
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-key me-2"></i> ID:</strong>
                                <span>{{ $cliente->id_cliente }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-person me-2"></i> Nombre Completo:</strong>
                                <span>{{ $cliente->nombre }} {{ $cliente->apellido }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-envelope me-2"></i> Correo Electrónico:</strong>
                                <span>{{ $cliente->email }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-phone me-2"></i> Teléfono:</strong>
                                <span>{{ $cliente->telefono ?? 'No registrado' }}</span>
                            </li>
                        </ul>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{route('clientes.index')}}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left me-1"></i> Volver al Listado
                            </a>
                            <a href="{{route('clientes.edit', $cliente->id_cliente)}}" class="btn btn-warning px-4 text-dark">
                                <i class="bi bi-pencil me-1"></i> Editar Cliente
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>