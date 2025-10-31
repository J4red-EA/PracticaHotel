<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-info text-white py-3">
                        <h3 class="mb-0">Información del Cliente</h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">ID</label>
                            <p class="form-control-plaintext">{{$cliente->id_cliente}}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nombre</label>
                            <p class="form-control-plaintext">{{$cliente->nombre}}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Apellido</label>
                            <p class="form-control-plaintext">{{$cliente->apellido}}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Correo Electrónico</label>
                            <p class="form-control-plaintext">{{$cliente->email}}</p>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Teléfono</label>
                            <p class="form-control-plaintext">{{$cliente->telefono ?? 'No registrado'}}</p>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{route('clientes.index')}}" class="btn btn-secondary">
                                Volver al Listado
                            </a>
                            <a href="{{route('clientes.edit', $cliente->id_cliente)}}" class="btn btn-info px-4">
                                Editar Cliente
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>