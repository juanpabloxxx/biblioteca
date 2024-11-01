@extends('layouts.app')

@section('title', 'Biblioteca - Principal')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Biblioteca</a>
    </nav>

    <div class="container mt-4">
        <h2>Noticia literaria</h2>
        <p>¡Explora nuestros nuevos libros y autores recomendados!</p>
    </div>

    <footer class="bg-light text-center p-3 mt-4">
        <p>Nombre de la biblioteca © {{ date('Y-m-d') }}</p>
    </footer>
@endsection
