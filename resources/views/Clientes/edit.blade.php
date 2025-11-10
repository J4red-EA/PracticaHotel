<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    
    {{-- 💡 USANDO VITE: Eliminamos el CDN para usar Bootstrap local --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-header bg-warning text-dark py-3">
                        <h3 class="mb-0 fw-bold"><i class="bi bi-pencil-square me-2"></i> Editar Cliente</h3>
                        <small class="text-secondary">ID: {{ $cliente->id_cliente }}</small>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{route('clientes.update', $cliente->id_cliente)}}">
                            @csrf
                            @method('PUT')
                            
                            {{-- Los campos ya están perfectos con form-control-lg --}}

                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" value="{{ $cliente->nombre }}" placeholder="Nombre del cliente" required>
                            </div>

                            <div class="mb-3">
                                <label for="apellido" class="form-label fw-semibold">Apellido</label>
                                <input type="text" class="form-control form-control-lg" id="apellido" name="apellido" value="{{ $cliente->apellido }}" placeholder="Apellido del cliente" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ $cliente->email }}" placeholder="correo@ejemplo.com" required>
                            </div>

                            <div class="mb-4">
                                <label for="telefono" class="form-label fw-semibold">Teléfono</label>
                                <input type="text" class="form-control form-control-lg" id="telefono" name="telefono" value="{{ $cliente->telefono }}" placeholder="Número de teléfono">
                            </div>

                            <hr class="my-4">

                            <div class="d-flex gap-2 justify-content-between">
                                <a href="{{route('clientes.index')}}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left-circle me-1"></i> Cancelar
                                </a>
                                <button type="submit" class="btn btn-warning text-dark px-5">
                                    <i class="bi bi-save-fill me-1"></i> Actualizar
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