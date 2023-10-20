@extends('layout')
@section('principal')

<div class="container formulario-editar-alumno">
    <h2 style="text-align: center; color: white;">Editar Alumno</h2>
    <form method="POST" action="{{ route('alumnos.update', $alumno->id) }}" style="margin-top: 20px;">
        @csrf
        @method('PUT') <!-- Utiliza PUT para la actualización -->
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="dni" style="font-weight: bold;">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" value="{{ $alumno->dni }}" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="nombres" style="font-weight: bold;">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $alumno->nombres }}" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="apellidos" style="font-weight: bold;">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $alumno->apellidos }}" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        </div>
        <button type="submit" class="btn btn-primary" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Guardar cambios</button>
    </form>
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