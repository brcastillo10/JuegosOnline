
@extends('app') <!--Coloca lo que hay en la vista app-->
@section('title','Juegos para disgrafia') <!--Titulo que se desea que se ubique-->
@section('contenido')

<body>
<!-- Contenido Principal -->
<main class="container text-center">
  <h1 class="mb-4">Completa Palabras</h1>

  <!-- Barra de progreso -->
  <div class="progress-container">
    <div class="progress mb-4" style="height: 30px;">
      <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
    </div>
  </div>
      <!-- Primera Palabra -->
  <div class="row justify-content-center">
    <div class="col-md-8 word-box">
      <img src="/images/prueba3.png" alt="Bicicleta" class="img-fluid" width="100">
      <input type="text" class="letter-input" maxlength="2">
      <input type="text" class="letter-input" maxlength="2">
      <input type="text" class="letter-input" maxlength="2">
      <input type="text" class="letter-input" maxlength="1">
      <input type="text" class="letter-input" maxlength="2">
      <span class="feedback"><div class="alert alert-danger" role="alert">
        Mal!
      </div>
      </span> <!-- Feedback (Correcto o Incorrecto) -->
    </div>

    <!-- Segunda Palabra -->
    <div class="col-md-8 word-box">
      <img src="/images/prueba3.png" alt="Bicicleta" class="img-fluid" width="100">
      <input type="text" class="letter-input" maxlength="2">
      <input type="text" class="letter-input" maxlength="2">
      <input type="text" class="letter-input" maxlength="2">
      <input type="text" class="letter-input" maxlength="1">
      <input type="text" class="letter-input" maxlength="2">
      <span class="feedback"><div class="alert alert-success" role="alert">
        Correcto!
      </div>
      </span> <!-- Feedback (Correcto o Incorrecto) -->
    </div>
  


  <!-- Botones para el control -->
  <div class="d-flex justify-content-center mt-4">
    <button class="btn btn-primary btn-game" onclick="reiniciar()">Reiniciar</button>
    <button class="btn btn-primary btn-game" onclick="siguienteNivel()">Siguiente Nivel</button>
    <button class="btn btn-primary btn-game" onclick="verificarRespuestas()">COMPLETAR</button>
  </div>
</main>
</body>

@endsection
