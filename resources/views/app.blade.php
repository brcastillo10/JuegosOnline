<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="/css/games.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet"> <!-- Iconos de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>@yield('title', 'JuegosOnline')</title>
    <link rel="stylesheet" href="/css/loginstyle.css">

</head>
<body>

  
<!-- Barra de navegación -->
<header class="p-3 mb-3 border-bottom">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/home" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="/images/icon.png" alt="Home Icon" width="40" height="32" class="me-2"> <!-- Imagen personalizada -->
      </a>

      <!-- Navegación principal -->
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{url('/home')}}" class="nav-link px-2 link-secondary">Inicio</a></li>
        <li><a href="{{url('/profile')}}" class="nav-link px-2 link-body-emphasis">Juegos</a></li>
        <li><a href="{{url('/profile')}}" class="nav-link px-2 link-body-emphasis">Puntuación</a></li>
        <li><a href="{{url('/profile')}}" class="nav-link px-2 link-body-emphasis">Ayuda</a></li>
      </ul>

      <!-- Buscador de juegos -->
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" placeholder="Buscar Juego..." aria-label="Search">
      </form>

      <!-- Botones de iniciar sesion y registrar (Se va mostrar si no esta autenticado) -->
      <div class="text-end">
        <button onclick="window.location.href='http://juegosonline.test/login'" type="button" class="btn btn-light text-dark me-2">Iniciar Sesión</button>
        <button onclick="window.location.href='http://juegosonline.test/register'" type="button" class="btn btn-primary">Registrarse</button>
      </div>

      <!-- Menu de usuario -->
      <div class="dropdown text-end ms-3">
        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://i.blogs.es/4e85be/super-saiyan/840_560.jpeg" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
          <li><a class="dropdown-item" href="{{url('/profile')}}">Resultados</a></li>
          <li><a class="dropdown-item" href="{{url('/profile')}}">Configuración</a></li>
          <li><a class="dropdown-item" href="{{url('/profile')}}">Usuario</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="{{url('/login')}}">Cerrar Sesión</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>


  
  
  </main>
  
  @yield('contenido') <!--Mismo nombre en section-->



</body>
</html>