<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Empleado</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <h3 class="mb-0">Registrar Nuevo Empleado</h3>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{route('empleados.store')}}">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" 
                                       class="form-control" 
                                       id="nombre" 
                                       name="nombre" 
                                       placeholder="Ingrese el nombre" 
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="apellido" class="form-label fw-semibold">Apellido</label>
                                <input type="text" 
                                       class="form-control" 
                                       id="apellido" 
                                       name="apellido" 
                                       placeholder="Ingrese el apellido" 
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="puesto" class="form-label fw-semibold">Puesto</label>
                                <input type="text" 
                                       class="form-control" 
                                       id="puesto" 
                                       name="puesto" 
                                       placeholder="Ej: Recepcionista, Gerente" 
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                                <input type="email" 
                                       class="form-control" 
                                       id="email" 
                                       name="email" 
                                       placeholder="ejemplo@correo.com" 
                                       required>
                            </div>

                            <div class="mb-4">
                                <label for="telefono" class="form-label fw-semibold">Teléfono</label>
                                <input type="text" 
                                       class="form-control" 
                                       id="telefono" 
                                       name="telefono" 
                                       placeholder="Ingrese el teléfono (opcional)">
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{route('empleados.index')}}" class="btn btn-secondary">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary px-4">
                                    Guardar Empleado
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