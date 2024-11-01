@extends('layouts.app')

@section('title', 'Registro de Libro')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Biblioteca</a>
    </nav>

    <div class="container mt-4">
        <h2>Registrar Nuevo Libro</h2>
        <form action="{{ route('libros.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required maxlength="150">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" required>
            </div>
            <div class="mb-3">
                <label for="paginas" class="form-label">Páginas</label>
                <input type="number" class="form-control" id="paginas" name="paginas" required min="1">
            </div>
            <div class="mb-3">
                <label for="anio" class="form-label">Año</label>
                <input type="number" class="form-control" id="anio" name="anio" required min="1000" max="{{ date('Y') }}">
            </div>
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="editorial" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email de Editorial</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <footer class="bg-light text-center p-3 mt-4">
        <p>Nombre de la biblioteca © {{ date('Y-m-d') }}</p>
    </footer>
@endsection
