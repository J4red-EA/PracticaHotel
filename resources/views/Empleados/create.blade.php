<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Empleado</title>
    
    {{-- 💡 USANDO VITE: Reemplazamos CDN para cargar los estilos locales --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-success text-white py-3">
                        <h3 class="mb-0"><i class="bi bi-person-plus me-2"></i> Registrar Nuevo Empleado</h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('empleados.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del empleado" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="apellido" class="form-label fw-semibold">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido del empleado" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="correo@hotel.com" required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="telefono" class="form-label fw-semibold">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Número de contacto" required>
                            </div>
                            
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
                                <a href="{{ route('empleados.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-x-circle me-1"></i> Cancelar
                                </a>
                                <button type="submit" class="btn btn-success px-4">
                                    <i class="bi bi-save me-1"></i> Guardar Empleado
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