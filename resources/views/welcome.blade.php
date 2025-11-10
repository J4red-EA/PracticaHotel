<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menú Principal - Hotel</title>
    {{-- La directiva de Vite carga Bootstrap --}}
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    {{-- ¡Puedes eliminar la etiqueta <style> anterior! --}}
</head>
<body class="bg-light text-center p-5">
    <div class="container mt-5">
        <h1 class="text-primary mb-4">Bienvenido al Sistema de Gestión de Hotel</h1>
        
        <div class="d-grid gap-3 col-md-8 mx-auto">
            {{-- Usamos clases de Bootstrap (btn, btn-info, w-100 para ancho completo) --}}
            <a class="btn btn-lg btn-info text-white my-2" href="{{ route('clientes.index') }}">Clientes</a>
            <a class="btn btn-lg btn-warning text-dark my-2" href="{{ route('empleados.index') }}">Empleados</a>
            <a class="btn btn-lg btn-success my-2" href="{{ route('habitaciones.index') }}">Habitaciones</a>
            <a class="btn btn-lg btn-danger my-2" href="{{ route('servicios.index') }}">Servicios</a>
        </div>
        
    </div>
</body>
</html>