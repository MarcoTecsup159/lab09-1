<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE EVENTOS</title>
    <link href="{{ asset('css/eventos.css') }}" rel="stylesheet">
</head>
<body>
    <h1>EVENTOS</h1>
    <a href="{{ route('eventos.formulario') }}" class="button">Agregar Nuevo Evento</a>

    <div class="eventos-wrapper">
    @foreach ($eventos as $evento)
    <div class="evento-container">
        <h2 class="evento-name">{{ $evento->Nombre }}</h2>
        <p class="evento-location">Ubicación: {{ $evento->Ubicacion }}</p>
        <p class="evento-date">Fecha: {{ $evento->Fecha }}</p>
        <p class="evento-time">Hora: {{ $evento->Hora }}</p>
    </div>
    @endforeach
    </div>
</body>
</html>