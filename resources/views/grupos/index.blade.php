@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
            {{ session('success')}}
        </div>
    @endif

    <h1>Listado de Grupos</h1>
    <form action="{{ route('grupos.index') }}" method="GET">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <button type="submit" class="btn btn-info">Buscar</button> &nbsp;
                <a href="{{ route('grupos.create') }}" class="btn btn-outline-primary">Nuevo grupo</a>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($grupos as $item)
                <tr>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>
                        <a href="{{ route('grupos.show', $item->id) }}" class="btn btn-outline-secondary">Ver</a>
                        <a href="{{ route('grupos.edit', $item->id )}}" class="btn btn-outline-info">Editar</a>
                       <a href="{{ route('grupos.delete', $item->id )}}" class="btn btn-outline-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-12">
            {{ $grupos->links() }}
        </div>
    </div>
@endsection
