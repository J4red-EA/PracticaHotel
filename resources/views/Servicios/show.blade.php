<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Servicio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-info text-white py-3">
                        <h3 class="mb-0">Información del Servicio</h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">ID</label>
                            <p class="form-control-plaintext">{{$servicio->id_servicio}}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nombre</label>
                            <p class="form-control-plaintext">{{$servicio->nombre}}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Descripción</label>
                            <p class="form-control-plaintext">{{$servicio->descripcion ?? 'Sin descripción'}}</p>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Precio</label>
                            <p class="form-control-plaintext">${{number_format($servicio->precio, 2)}}</p>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{route('servicios.index')}}" class="btn btn-secondary">
                                Volver al Listado
                            </a>
                            <a href="{{route('servicios.edit', $servicio->id_servicio)}}" class="btn btn-info px-4">
                                Editar Servicio
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