<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Habitación</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card shadow border-0 rounded-3">
                    <div class="card-header bg-warning text-dark py-3">
                        <h3 class="mb-0 fw-bold">Editar Habitación</h3>
                        <!--<small class="text-muted">ID: {{ $habitacion->id_habitacion }}</small>-->
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{route('habitaciones.update', $habitacion->id_habitacion)}}">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="numero" class="form-label fw-semibold">Número de Habitación</label>
                                <input type="number" 
                                       class="form-control form-control-lg" 
                                       id="numero" 
                                       name="numero" 
                                       value="{{ $habitacion->numero }}" 
                                       placeholder="Ej: 101" 
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="tipo" class="form-label fw-semibold">Tipo</label>
                                <select class="form-select form-select-lg" id="tipo" name="tipo" required>
                                    <option value="Individual" {{ $habitacion->tipo == 'Individual' ? 'selected' : '' }}>Individual</option>
                                    <option value="Doble" {{ $habitacion->tipo == 'Doble' ? 'selected' : '' }}>Doble</option>
                                    <option value="Suite" {{ $habitacion->tipo == 'Suite' ? 'selected' : '' }}>Suite</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="precio" class="form-label fw-semibold">Precio por Noche</label>
                                <input type="number" 
                                       step="0.01"
                                       class="form-control form-control-lg" 
                                       id="precio" 
                                       name="precio" 
                                       value="{{ $habitacion->precio }}" 
                                       placeholder="0.00" 
                                       required>
                            </div>

                            <div class="mb-4">
                                <label for="estado" class="form-label fw-semibold">Estado</label>
                                <select class="form-select form-select-lg" id="estado" name="estado" required>
                                    <option value="Disponible" {{ $habitacion->estado == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                                    <option value="Ocupada" {{ $habitacion->estado == 'Ocupada' ? 'selected' : '' }}>Ocupada</option>
                                    <option value="Mantenimiento" {{ $habitacion->estado == 'Mantenimiento' ? 'selected' : '' }}>Mantenimiento</option>
                                </select>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex gap-2 justify-content-between">
                                <a href="{{route('habitaciones.index')}}" class="btn btn-outline-secondary">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-warning text-dark px-5">
                                    Actualizar Habitación
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>