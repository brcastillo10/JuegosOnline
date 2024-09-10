
@extends('app') <!--Coloca lo que hay en la vista app-->
@section('title','Iniciar Sesión') <!--Titulo que se desea que se ubique-->
@section('contenido')

<body>
        <!--main containes-->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!--login container-->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

             <!--lef box-->

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #27282b;">
            <div class="featured-image">
                <img src="/images/prueba2.png" class="img-fluid" style="width: 150px">
            </div>
            <p class="text-white fs-4" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif ">Son Goku te da la Bienvenida</p>
            <small class="text-white" style="font-family:'Courier New', Courier, monospace ">Juega juegos cheverez</small>
        </div>


        <!--right box-->
        <div class="col-md-6 right-box">
            <form action="" method="">
            <div class="row align-items-center">
                <div class="header-text mb-4" >
                    <h2>Iniciar Sesión</h2>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Correo Electrónico">
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Contraseña">
                </div>
                <!--Botones para el recuerdame y cambio de contraseña-->
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Recuerdame</small></label>
                    </div>

                    <div class="olvidarPassword">
                        <small><a href="">Me olvide la contraseña :c</a></small>
                    </div>
                </div>
                
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">Ingresar</button>
                </div>

                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">Ingresa con san gugul</button>
                </div>

                <div class="row">
                    <small>No tenes Cuenta? <a href="{{url('/register')}}">Registrate</a></small>
                </div>

            </div>
            </form>
        </div>

        </div>
    </div>
</body>

@endsection
