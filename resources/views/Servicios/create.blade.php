<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Servicio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <h3 class="mb-0">Registrar Nuevo Servicio</h3>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{route('servicios.store')}}">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre del Servicio</label>
                                <input type="text" 
                                       class="form-control" 
                                       id="nombre" 
                                       name="nombre" 
                                       placeholder="Ej: Spa, Lavandería" 
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label fw-semibold">Descripción</label>
                                <textarea class="form-control" 
                                          id="descripcion" 
                                          name="descripcion" 
                                          rows="4" 
                                          placeholder="Descripción detallada del servicio (opcional)"></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="precio" class="form-label fw-semibold">Precio</label>
                                <input type="number" 
                                       step="0.01"
                                       class="form-control" 
                                       id="precio" 
                                       name="precio" 
                                       placeholder="0.00" 
                                       required>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{route('servicios.index')}}" class="btn btn-secondary">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary px-4">
                                    Guardar Servicio
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