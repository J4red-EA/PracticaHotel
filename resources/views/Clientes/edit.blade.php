<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card shadow border-0 rounded-3">
                    <div class="card-header bg-warning text-dark py-3">
                        <h3 class="mb-0 fw-bold">Editar Cliente</h3>
                        <small class="text-muted">ID: {{ $cliente->id_cliente }}</small>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{route('clientes.update', $cliente->id_cliente)}}">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="nombre" 
                                       name="nombre" 
                                       value="{{ $cliente->nombre }}" 
                                       placeholder="Nombre del cliente" 
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="apellido" class="form-label fw-semibold">Apellido</label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="apellido" 
                                       name="apellido" 
                                       value="{{ $cliente->apellido }}" 
                                       placeholder="Apellido del cliente" 
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                                <input type="email" 
                                       class="form-control form-control-lg" 
                                       id="email" 
                                       name="email" 
                                       value="{{ $cliente->email }}" 
                                       placeholder="correo@ejemplo.com" 
                                       required>
                            </div>

                            <div class="mb-4">
                                <label for="telefono" class="form-label fw-semibold">Teléfono</label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="telefono" 
                                       name="telefono" 
                                       value="{{ $cliente->telefono }}" 
                                       placeholder="Número de teléfono">
                            </div>

                            <hr class="my-4">

                            <div class="d-flex gap-2 justify-content-between">
                                <a href="{{route('clientes.index')}}" class="btn btn-outline-secondary">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-warning text-dark px-5">
                                    Actualizar Cliente
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