@extends('layout')
@section('principal')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="logo">
@if(session('usuario_autenticado'))
            {{-- Capturamos el usuario de la sesion --}}
            <div style="background-color: blue; width: 600px; font-size: 50px; text-align: center;font-family: fantasy;border-radius: 20%;">Bienvenido: {{ session('usuario_autenticado')['usuario'] }}</div>
        @endif

</div>
<div class="button-container">
    <form action="{{ route('alumnos.index') }}" method="GET">
        @csrf
        <button class="custom-button">ALUMNOS</button>
    </form>
    <form action="{{ route('instructores.index') }}" method="GET">
        @csrf
        <button class="custom-button">INSTRUCTORES</button>
    </form>
    <form action="{{ route('cursos.index') }}" method="GET">
        @csrf
        <button class="custom-button">CURSOS</button>
    </form>
    <a href="{{ route('logout') }}" class="custom-button">Cerrar Sesión</a>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const logo = document.querySelector('.logo');
        const buttonContainer = document.querySelector('.button-container');

        setTimeout(function() {
            logo.classList.add('fade-in');
            buttonContainer.classList.add('fade-in');
        }, 500); // Cambia el tiempo según lo que prefieras
    });
</script>
</body>

</html>


@endsection