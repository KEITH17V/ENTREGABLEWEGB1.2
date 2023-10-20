@extends('layout')
@section('principal')
<div class="ALUMNO" style="margin-top: 20px;">
    <h2 style="text-align: center; color: white;">Listado de Alumno</h2>
    <table class="table" style="width: 100%; border-collapse: collapse; border: 1px solid #ccc; margin-top: 20px;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="padding: 10px; border: 1px solid #ccc;">ID</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Dni</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Nombres</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Apellidos</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr style="text-align: center;">
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $alumno->id }}</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $alumno->dni }}</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $alumno->nombres }}</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $alumno->apellidos }}</td>
                <td style="padding: 10px; border: 1px solid #ccc;">

                    <form action="{{ route('alumnos.show', $alumno->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-info">Ver</button>
                    </form>

                    <form action="{{ route('alumnos.edit', $alumno->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-warning">Editar</button>
                    </form>

                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
        <a href="{{ route('alumnos.create') }}" class="btn btn-success" style="padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border: none; border-radius: 5px; cursor: pointer; display: block; width: 120px; text-align: center; margin: 20px auto;">Agregar</a>
    
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
            text-decoration: none; /* Agregado para quitar la subrayado de los enlaces */
            display: inline-block; /* Agregado para que el enlace se comporte como un bloque en línea */
        }

        .custom-button:hover {
            background-color: #45a049;
        }
    </style>
    <a href="{{ route('main') }}" class="custom-button">Regresar al Menú Principal</a>
</div>
@endsection