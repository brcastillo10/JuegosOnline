
@extends('app') <!--Coloca lo que hay en la vista app-->
@section('title','Juegos para disgrafia') <!--Titulo que se desea que se ubique-->
@section('contenido')
<style>
    .word-box {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 15px 0;
    }
    .letter-box {
      background-color: #d3d3d3;
      margin: 5px;
      padding: 10px;
      border-radius: 5px;
      font-weight: bold;
    }
    .correct {
      color: green;
      font-weight: bold;
    }
    .incorrect {
      color: red;
      font-weight: bold;
    }
    .btn-game {
      width: 150px;
      margin: 10px;
    }
  </style>
<body>
    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
          <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold">JUEGOS PARA DISGRAFIA</h1>
            <h3 class="fw-normal text-muted mb-3">TIENES DIFICULTADES</h3>
            <div class="d-flex gap-3 justify-content-center lead fw-normal">
              <a class="icon-link" href="#">
                SOBRE DISGRAFÍA
                <svg class="bi"><use xlink:href="#chevron-right"/></svg>
              </a>
            </div>
          </div>
          <div class="product-device shadow-sm d-none d-md-block"></div>
          <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="/images/prueba3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Completa Palabra</h5>
                          <p class="card-text">Aqui tendras que...</p>
                          <a href="/completa_palabra" class="btn btn-primary">Jugar</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="/images/prueba3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Completar Trazos</h5>
                          <p class="card-text">Aqui tendras que...</p>
                          <a href="/completa_trazos" class="btn btn-primary">Jugar</a>
                        </div>
                      
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="/images/prueba3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Ordenar Palabra</h5>
                          <p class="card-text">Aqui tendras que...</p>
                          <a href="/completa_palabra" class="btn btn-primary">Jugar</a>
                        </div>
                      
                    </div>
                </div>
                <figure class="figure">
                    <img src="/images/prueba3.png" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">Completa Palabra</figcaption>
                  </figure>
            </div>
        </div>
      </main>
</body>

@endsection
