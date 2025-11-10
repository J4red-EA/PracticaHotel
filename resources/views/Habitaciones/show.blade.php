<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Habitación</title>
    
    {{-- 💡 USANDO VITE: Cargamos los recursos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <h3 class="mb-0 fw-bold"><i class="bi bi-house-door me-2"></i> Detalles de la Habitación #{{ $habitacion->numero }}</h3>
                        <small class="text-white-50">Tipo: {{ $habitacion->tipo }}</small>
                    </div>
                    <div class="card-body p-4">
                        
                        {{-- Usamos list-group para presentar los detalles --}}
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-key me-2"></i> ID:</strong>
                                <span>{{ $habitacion->id_habitacion }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-tag me-2"></i> Tipo:</strong>
                                <span>{{ $habitacion->tipo }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-currency-dollar me-2"></i> Precio por Noche:</strong>
                                <span>${{ number_format($habitacion->precio, 2) }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong><i class="bi bi-info-circle me-2"></i> Estado:</strong>
                                <span>
                                    {{-- Lógica de Badges para el estado --}}
                                    @php
                                        $estado = strtolower($habitacion->estado);
                                        $badge_class = 'secondary';
                                        if ($estado == 'disponible') $badge_class = 'success';
                                        elseif ($estado == 'ocupada') $badge_class = 'danger';
                                        elseif ($estado == 'mantenimiento') $badge_class = 'warning text-dark';
                                    @endphp
                                    <span class="badge bg-{{ $badge_class }}">{{ $habitacion->estado }}</span>
                                </span>
                            </li>
                        </ul>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ route('habitaciones.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left me-1"></i> Volver al Listado
                            </a>
                            <a href="{{ route('habitaciones.edit', $habitacion->id_habitacion) }}" class="btn btn-warning px-4 text-dark">
                                <i class="bi bi-pencil me-1"></i> Editar Habitación
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>