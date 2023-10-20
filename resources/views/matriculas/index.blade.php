<!-- @extends('layout')
@section('principal')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Matrícula</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin: 15px 0 5px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulario de Matrícula</h2>
    <form action="#" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="curso">Curso:</label>
        <select id="curso" name="curso">
            <option value="curso1">Curso 1</option>
            <option value="curso2">Curso 2</option>
            <option value="curso3">Curso 3</option>
            <option value="curso4">Curso 4</option>
        </select>

        <label for="fecha">Fecha de Matrícula:</label>
        <input type="text" id="fecha" name="fecha" placeholder="DD/MM/AAAA" required>

        <button type="submit">Matricular</button>
    </form>
</div>

</body>
</html>

@endsection -->