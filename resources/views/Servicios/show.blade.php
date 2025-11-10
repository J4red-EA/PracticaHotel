<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Servicio</title>
    
    {{-- 💡 USANDO VITE: Cargamos los recursos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-dark text-white py-3">
                        <h3 class="mb-0 fw-bold"><i class="bi bi-info-circle me-2"></i> Detalles del Servicio</h3>
                        <small class="text-white-50">Servicio ID: {{ $servicio->id }}</small>
                    </div>
                    <div class="card-body p-4">
                        
                        {{-- Usamos list-group para presentar los detalles --}}
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-tag me-2"></i> Nombre:</strong>
                                <span>{{ $servicio->nombre }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-currency-dollar me-2"></i> Precio:</strong>
                                <span><span class="badge bg-success">${{ number_format($servicio->precio, 2) }}</span></span>
                            </li>
                            <li class="list-group-item">
                                <strong><i class="bi bi-file-text me-2"></i> Descripción:</strong>
                                <p class="mb-0 mt-2">{{ $servicio->descripcion }}</p>
                            </li>
                        </ul>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ route('servicios.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left me-1"></i> Volver al Listado
                            </a>
                            <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning px-4 text-dark">
                                <i class="bi bi-pencil me-1"></i> Editar Servicio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>