<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Habitación</title>
    
    {{-- 💡 USANDO VITE: Eliminamos el CDN para usar los recursos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-warning text-dark py-3">
                        <h3 class="mb-0 fw-bold"><i class="bi bi-pencil-square me-2"></i> Editar Habitación</h3>
                        <small class="text-secondary">ID: {{ $habitacion->id_habitacion }}</small>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('habitaciones.update', $habitacion->id_habitacion) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="numero" class="form-label fw-semibold">Número de Habitación</label>
                                <input type="text" class="form-control" id="numero" name="numero" value="{{ $habitacion->numero }}" placeholder="Ej: 101" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="tipo" class="form-label fw-semibold">Tipo</label>
                                <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $habitacion->tipo }}" placeholder="Ej: Suite, Doble" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="precio" class="form-label fw-semibold">Precio por Noche ($)</label>
                                <input type="number" class="form-control" id="precio" name="precio" value="{{ $habitacion->precio }}" step="0.01" required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="estado" class="form-label fw-semibold">Estado</label>
                                <select class="form-select" id="estado" name="estado" required>
                                    <option value="disponible" {{ $habitacion->estado == 'disponible' ? 'selected' : '' }}>Disponible</option>
                                    <option value="ocupada" {{ $habitacion->estado == 'ocupada' ? 'selected' : '' }}>Ocupada</option>
                                    <option value="mantenimiento" {{ $habitacion->estado == 'mantenimiento' ? 'selected' : '' }}>Mantenimiento</option> 
                                </select>
                            </div>
                            
                            <hr class="my-4">
                            
                            <div class="d-flex gap-2 justify-content-between">
                                <a href="{{ route('habitaciones.index') }}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left-circle me-1"></i> Cancelar
                                </a>
                                <button type="submit" class="btn btn-warning text-dark px-5">
                                    <i class="bi bi-save-fill me-1"></i> Actualizar Habitación
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