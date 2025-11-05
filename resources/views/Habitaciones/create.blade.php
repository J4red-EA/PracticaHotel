<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nueva Habitación</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <h3 class="mb-0">Registrar Nueva Habitación</h3>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{route('habitaciones.store')}}">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="numero" class="form-label fw-semibold">Número de Habitación</label>
                                <input type="number" 
                                       class="form-control" 
                                       id="numero" 
                                       name="numero" 
                                       placeholder="Ej: 101" 
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="tipo" class="form-label fw-semibold">Tipo</label>
                                <select class="form-select" id="tipo" name="tipo" required>
                                    <option value="" disabled selected>Seleccione un tipo</option>
                                    <option value="Individual">Individual</option>
                                    <option value="Doble">Doble</option>
                                    <option value="Suite">Suite</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="precio" class="form-label fw-semibold">Precio por Noche</label>
                                <input type="number" 
                                       step="0.01"
                                       class="form-control" 
                                       id="precio" 
                                       name="precio" 
                                       placeholder="0.00" 
                                       required>
                            </div>

                            <div class="mb-4">
                                <label for="estado" class="form-label fw-semibold">Estado Inicial</label>
                                <select class="form-select" id="estado" name="estado" required>
                                    <option value="Disponible" selected>Disponible</option>
                                    <option value="Ocupada">Ocupada</option>
                                    <option value="Mantenimiento">Mantenimiento</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{route('habitaciones.index')}}" class="btn btn-secondary">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary px-4">
                                    Guardar Habitación
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