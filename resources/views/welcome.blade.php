<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menú Principal</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center py-5">
  <div class="container">
    <h1 class="text-primary mb-5">Bienvenido al sistema de gestión de Hotel</h1>
    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="{{ route('clientes.index') }}" class="btn btn-primary btn-lg">Clientes</a>
      <a href="{{ route('empleados.index') }}" class="btn btn-primary btn-lg">Empleados</a>
      <a href="{{ route('habitaciones.index') }}" class="btn btn-primary btn-lg">Habitaciones</a>
      <a href="{{ route('servicios.index') }}" class="btn btn-primary btn-lg">Servicios</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>