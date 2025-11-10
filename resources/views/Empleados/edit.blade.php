<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
    
    {{-- 💡 USANDO VITE: Eliminamos el CDN para usar el Bootstrap local --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-warning text-dark py-3">
                        <h3 class="mb-0 fw-bold"><i class="bi bi-person-gear me-2"></i> Editar Empleado</h3>
                        <small class="text-secondary">ID: {{ $empleado->id_empleado }}</small>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('empleados.update', $empleado->id_empleado) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" 
                                       class="form-control" 
                                       id="nombre" 
                                       name="nombre" 
                                       value="{{ $empleado->nombre }}" 
                                       placeholder="Nombre del empleado"
                                       required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="apellido" class="form-label fw-semibold">Apellido</label>
                                <input type="text" 
                                       class="form-control" 
                                       id="apellido" 
                                       name="apellido" 
                                       value="{{ $empleado->apellido }}" 
                                       placeholder="Apellido del empleado"
                                       required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                                <input type="email" 
                                       class="form-control" 
                                       id="email" 
                                       name="email" 
                                       value="{{ $empleado->email }}" 
                                       placeholder="Correo electrónico"
                                       required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="telefono" class="form-label fw-semibold">Teléfono</label>
                                <input type="text" 
                                       class="form-control" 
                                       id="telefono" 
                                       name="telefono" 
                                       value="{{ $empleado->telefono }}" 
                                       placeholder="Número de contacto"
                                       required>
                            </div>
                            
                            <hr class="my-4">
                            
                            <div class="d-flex gap-2 justify-content-between">
                                <a href="{{ route('empleados.index') }}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left-circle me-1"></i> Cancelar
                                </a>
                                <button type="submit" class="btn btn-warning text-dark px-5">
                                    <i class="bi bi-save-fill me-1"></i> Actualizar Empleado
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