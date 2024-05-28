@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Entidades</h1>
        <a href="{{ route('entidades.create') }}" class="btn btn-primary">Crear Entidad</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entidades as $entidad)
                    <tr>
                        <td>{{ $entidad->id }}</td>
                        <td>{{ $entidad->nombre }}</td>
                        <td>{{ $entidad->tipoEntidad->nombre }}</td>
                        <td>
                            <a href="{{ route('entidades.show', $entidad->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('entidades.edit', $entidad->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('entidades.destroy', $entidad->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
