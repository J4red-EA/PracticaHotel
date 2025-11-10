<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Servicio</title>
    
    {{-- 💡 USANDO VITE: Eliminamos el CDN para usar los recursos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-header bg-warning text-dark py-3">
                        <h3 class="mb-0 fw-bold"><i class="bi bi-pencil-square me-2"></i> Editar Servicio</h3>
                        <small class="text-secondary">ID: {{ $servicio->id_servicio }}</small>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{route('servicios.update', $servicio->id_servicio)}}">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre del Servicio</label>
                                <input type="text" 
                                       class="form-control" 
                                       id="nombre" 
                                       name="nombre" 
                                       value="{{ $servicio->nombre }}" 
                                       placeholder="Nombre del servicio" 
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label fw-semibold">Descripción</label>
                                <textarea class="form-control" 
                                          id="descripcion" 
                                          name="descripcion" 
                                          rows="4" 
                                          placeholder="Descripción del servicio">{{ $servicio->descripcion }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="precio" class="form-label fw-semibold">Precio ($)</label>
                                <input type="number" 
                                       step="0.01"
                                       class="form-control" 
                                       id="precio" 
                                       name="precio" 
                                       value="{{ $servicio->precio }}" 
                                       placeholder="0.00" 
                                       required>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex gap-2 justify-content-between">
                                <a href="{{route('servicios.index')}}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left-circle me-1"></i> Cancelar
                                </a>
                                <button type="submit" class="btn btn-warning text-dark px-5">
                                    <i class="bi bi-save-fill me-1"></i> Actualizar Servicio
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