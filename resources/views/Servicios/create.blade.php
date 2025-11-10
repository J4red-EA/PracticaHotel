<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Servicio</title>
    
    {{-- 💡 USANDO VITE: Eliminamos el CDN para usar los recursos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-dark text-white py-3">
                        <h3 class="mb-0 fw-bold"><i class="bi bi-gear-wide-connected me-2"></i> Registrar Nuevo Servicio</h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('servicios.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre del Servicio</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Desayuno Buffet, Lavandería" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="descripcion" class="form-label fw-semibold">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Detalles del servicio" required></textarea>
                            </div>
                            
                            <div class="mb-4">
                                <label for="precio" class="form-label fw-semibold">Precio ($)</label>
                                <input type="number" class="form-control" id="precio" name="precio" placeholder="Ej: 25.00" step="0.01" required>
                            </div>
                            
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
                                <a href="{{ route('servicios.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-x-circle me-1"></i> Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="bi bi-plus-circle me-1"></i> Crear Servicio
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