<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar evento</title>
    <link rel="stylesheet" href="/css/formulario.css">
</head>
<body>
    <h1 class="header">AGREGAR EVENTO</h1>
    <form action="{{ route('formulario.submit') }}" method="post">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="location">Ubicación</label>
        <input type="text" id="location" name="location" required><br><br>

        <label for="date">Fecha</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="time">Hora</label>
        <input type="time" id="time" name="time" required><br><br>

        <button type="submit">Registrar</button>
        <button type="submit" class="btn return-button" onclick="window.location='{{ route('eventos.eventos') }}'">Volver al índice</button>

    </form>
</body>
</html>