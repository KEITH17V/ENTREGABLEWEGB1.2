@extends('layout')
@section('principal')
<div class="container" style="text-align: center; margin-top: 20px;">
    <h2 style="color: white;">Detalles de Alumno</h2>
    <p><strong>ID:</strong> {{ $alumno->id }}</p>
    <p><strong>Dni:</strong> {{ $alumno->dni }}</p>
    <p><strong>Nombres:</strong> {{ $alumno->nombres }}</p>
    <p><strong>Apellidos:</strong> {{ $alumno->apellidos }}</p>
    <a href="{{ route('alumnos.index') }}" class="btn btn-primary" style="padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border: none; border-radius: 5px; cursor: pointer; margin-top: 20px; display: inline-block;">Volver</a>
</div>
<div class="form-group" style="margin-top: 20px; text-align: center;">
    <style>
        .custom-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-button:hover {
            background-color: #45a049;
        }
    </style>
    <a href="{{ route('alumnos.index') }}" class="custom-button">Regresar al Listado</a>
</div>

@endsection