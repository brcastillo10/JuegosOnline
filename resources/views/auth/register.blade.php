
@extends('app') <!--Coloca lo que hay en la vista app-->
@section('title','Register') <!--Titulo que se desea que se ubique-->
@section('contenido')

<body>
        <!--main containes-->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!--login container-->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

             <!--lef box-->

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #27282b;">
            <div class="featured-image">
                <img src="/images/prueba3.png" class="img-fluid" style="width: 150px">
            </div>
            <p class="text-white fs-4" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif ">Aprende con son Goku</p>
            <small class="text-white" style="font-family:'Courier New', Courier, monospace ">Juega juegos cheverez</small>
        </div>


        <!--right box-->
        <div class="col-md-6 right-box">
            <form action="" method="">
            <div class="row align-items-center">
                <div class="header-text mb-4" >
                    <h2>Registrate uwu</h2>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Nombre de Usuario">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Correo Electrónico">
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Contraseña">
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Confirmar Contraseña">
                </div>
                <!--Botones para el recuerdame y cambio de contraseña-->
                
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">Ingresar</button>
                </div>

            </div>
            </form>
        </div>

        </div>
    </div>
</body>

@endsection
