
@extends('app') <!--Coloca lo que hay en la vista app-->
@section('title','Completa Palabra') <!--Titulo que se desea que se ubique-->
@section('contenido')

<!-- Contenido Principal -->
<div class="container text-center">
    <h1 class="mb-4">Completa Palabras</h1>


    <form action="{{ route('activities.verificar', $activities->id) }}" method="POST">
        @csrf
        <div class="d-flex justify-content-center mb-4">
            @foreach(str_split($activities->palabra_incompleta) as $letra)
                <input type="text" name="palabra_completa[]" maxlength="1" class="letter-input"
                       value="{{ $letra === '_' ? '' : $letra }}"
                       {{ $letra !== '_' ? 'readonly' : '' }} required>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">COMPLETAR</button>
    </form>

    <a href="{{ route('games.completeWord') }}" class="btn btn-secondary mt-4">Reiniciar</a>
</div>

<!-- Estilos opcionales -->
<style>
    .letter-input {
        width: 40px;
        height: 40px;
        text-align: center;
        font-size: 24px;
        margin-right: 5px;
    }
</style>
</body>

@endsection
