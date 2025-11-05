<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Servicio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card shadow border-0 rounded-3">
                    <div class="card-header bg-warning text-dark py-3">
                        <h3 class="mb-0 fw-bold">Editar Servicio</h3>
                        <!--<small class="text-muted">ID: {{ $servicio->id_servicio }}</small>-->
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{route('servicios.update', $servicio->id_servicio)}}">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="nombre" 
                                       name="nombre" 
                                       value="{{ $servicio->nombre }}" 
                                       placeholder="Nombre del servicio" 
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label fw-semibold">Descripción</label>
                                <textarea class="form-control form-control-lg" 
                                          id="descripcion" 
                                          name="descripcion" 
                                          rows="4" 
                                          placeholder="Descripción del servicio">{{ $servicio->descripcion }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="precio" class="form-label fw-semibold">Precio</label>
                                <input type="number" 
                                       step="0.01"
                                       class="form-control form-control-lg" 
                                       id="precio" 
                                       name="precio" 
                                       value="{{ $servicio->precio }}" 
                                       placeholder="0.00" 
                                       required>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex gap-2 justify-content-between">
                                <a href="{{route('servicios.index')}}" class="btn btn-outline-secondary">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-warning text-dark px-5">
                                    Actualizar Servicio
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