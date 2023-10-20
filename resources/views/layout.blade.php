<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>SENATI</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('https://www.xtrafondos.com/descargar.php?id=5772&resolucion=1920x1080'); /* Cambia 'ruta_de_la_imagen.jpg' por la URL o la ruta de tu imagen */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
        }

        .contenidos {
            flex: 1;
        }

        footer {             
            background-color: #333;             
            color: white;             
            text-align: center;             
            padding: 20px;             
            position: fixed;             
            bottom: 0;             
            width: 100%;         }
    </style>
</head>

<body class="contenidos">
<div>
    @yield('principal')
    @yield('scripts')
</div>
<footer>
        <p>Todos los derechos reservados para Keith VC</p>
</footer>
</body>
</html>