@extends('layout')
@section('principal')
<div class="container" style="margin-top: 20px;">
    <h2 style="text-align: center; color: white;">Listado de Cursos</h2>
    <table class="table" style="width: 100%; border-collapse: collapse; border: 1px solid #ccc; margin-top: 20px;">
        <thead style="background-color: #f2f2f2;">
            <tr style="text-align: center;">
                <th style="padding: 10px; border: 1px solid #ccc;">ID</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Codigo</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Nombre</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Ciclo</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr style="text-align: center;">
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $curso->id }}</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $curso->codigo }}</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $curso->nombre }}</td>
                <td style="padding: 10px; border: 1px solid #ccc;">{{ $curso->ciclo }}</td>
                <td style="padding: 10px; border: 1px solid #ccc;">

                    <form action="{{ route('cursos.show', $curso->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-info">Ver</button>
                    </form>

                    <form action="{{ route('cursos.edit', $curso->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-warning">Editar</button>
                    </form>

                    <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('cursos.create') }}" class="btn btn-success" style="padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border: none; border-radius: 5px; cursor: pointer; display: block; width: 120px; text-align: center; margin: 20px auto;">Agregar</a>
    
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
