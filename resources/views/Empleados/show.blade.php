<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Empleado</title>
    
    {{-- 💡 USANDO VITE: Cargamos los recursos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-info text-white py-3">
                        <h3 class="mb-0 fw-bold"><i class="bi bi-person-badge me-2"></i> Información del Empleado</h3>
                        <small class="text-white-50">ID: {{ $empleado->id_empleado }}</small>
                    </div>
                    <div class="card-body p-4">
                        
                        {{-- Usamos list-group para presentar los detalles --}}
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-person me-2"></i> Nombre Completo:</strong>
                                <span>{{ $empleado->nombre }} {{ $empleado->apellido }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-briefcase me-2"></i> Puesto:</strong>
                                <span><span class="badge bg-primary">{{ $empleado->puesto }}</span></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-envelope me-2"></i> Correo Electrónico:</strong>
                                <span>{{ $empleado->email }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-phone me-2"></i> Teléfono:</strong>
                                <span>{{ $empleado->telefono }}</span>
                            </li>
                        </ul>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ route('empleados.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left me-1"></i> Volver al Listado
                            </a>
                            <a href="{{ route('empleados.edit', $empleado->id_empleado) }}" class="btn btn-warning px-4 text-dark">
                                <i class="bi bi-pencil me-1"></i> Editar Empleado
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>