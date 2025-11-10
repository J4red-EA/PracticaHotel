<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nueva Habitación</title>
    
    {{-- 💡 USANDO VITE: Eliminamos el CDN para usar los recursos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <h3 class="mb-0 fw-bold"><i class="bi bi-door-open me-2"></i> Registrar Nueva Habitación</h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('habitaciones.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="numero" class="form-label fw-semibold">Número de Habitación</label>
                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Ej: 101" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="tipo" class="form-label fw-semibold">Tipo de Habitación</label>
                                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ej: Simple, Doble, Suite" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="precio" class="form-label fw-semibold">Precio por Noche ($)</label>
                                <input type="number" class="form-control" id="precio" name="precio" placeholder="Ej: 150.00" step="0.01" required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="estado" class="form-label fw-semibold">Estado</label>
                                <select class="form-select" id="estado" name="estado" required>
                                    <option value="disponible">Disponible</option>
                                    <option value="ocupada">Ocupada</option>
                                    <option value="mantenimiento">Mantenimiento</option> {{-- Sugerencia: Añadir Mantenimiento --}}
                                </select>
                            </div>
                            
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
                                <a href="{{ route('habitaciones.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-x-circle me-1"></i> Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="bi bi-house-door-fill me-1"></i> Crear Habitación
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>