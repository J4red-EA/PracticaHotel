<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de la Habitación</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-info text-white py-3">
                        <h3 class="mb-0">Información de la Habitación</h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">ID</label>
                            <p class="form-control-plaintext">{{$habitacion->id_habitacion}}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Número</label>
                            <p class="form-control-plaintext">{{$habitacion->numero}}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Tipo</label>
                            <p class="form-control-plaintext">{{$habitacion->tipo}}</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Precio</label>
                            <p class="form-control-plaintext">${{number_format($habitacion->precio, 2)}}</p>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Estado</label>
                            <p class="form-control-plaintext">
                                @if($habitacion->estado == 'Disponible')
                                    <span class="badge bg-success fs-6">{{ $habitacion->estado }}</span>
                                @elseif($habitacion->estado == 'Ocupada')
                                    <span class="badge bg-danger fs-6">{{ $habitacion->estado }}</span>
                                @else
                                    <span class="badge bg-warning text-dark fs-6">{{ $habitacion->estado }}</span>
                                @endif
                            </p>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{route('habitaciones.index')}}" class="btn btn-secondary">
                                Volver al Listado
                            </a>
                            <a href="{{route('habitaciones.edit', $habitacion->id_habitacion)}}" class="btn btn-info px-4">
                                Editar Habitación
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