@extends('layout')
@section('principal')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class = "Login">
   
    <h1 class="Titulo Login">Iniciar Sesión</h1>
    
    <form class="LoginMenu" method="POST" action="{{ route('postlogin') }}">
        @csrf
        <label for="email" style="color: white;">Correo Electrónico:</label>
<input type="text" name="email" id="email">
<br>
<label for="contrasena" style="color: white;">Contraseña:</label>
<input type="password" name="contrasena" id="contrasena">
<br>
        <button class="Iniciarboton" type="submit">Iniciar Sesión</button>
    </form>

    @if(session('mensaje'))
        <p>{{ session('mensaje') }}</p>
    @endif

</body>
</html>

@endsection