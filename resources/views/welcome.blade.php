<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menú Principal</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f0f4f8;
      text-align: center;
      padding-top: 50px;
    }

    h1 {
      color: #2c3e50;
      margin-bottom: 40px;
    }

    .menu-link {
      display: inline-block;
      margin: 10px;
      padding: 15px 30px;
      background-color: #3498db;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-size: 18px;
      transition: background-color 0.3s ease;
    }

    .menu-link:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <h1>Bienvenido al sistema de gestión de Hotel</h1>
  <a class="menu-link" href="{{ route('clientes.index') }}">Clientes</a>
  <a class="menu-link" href="{{ route('empleados.index') }}">Empleados</a>
  <a class="menu-link" href="{{ route('habitaciones.index') }}">Habitaciones</a>
  <a class="menu-link" href="{{ route('servicios.index') }}">Servicios</a>
</body>
</html>