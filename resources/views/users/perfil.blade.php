<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Boostrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2728a66cde.js" crossorigin="anonymous"></script> <!--Link para usar Font Awesome kit-->
    <title>@yield('title', 'Perfil de usuario')</title>
    <style>
      /*Sidebar*/
      body{
        background: #e9e9e9;
      }
      #side_nav{
        background: #000146;
        width: 250px;
        height: 100vh;
      }

      .user-image {
        width: 100px;
        height: 100px;
        border-radius: 50%; 
        object-fit: cover; 
        margin: 20px auto;
        display: block;
      }

      .sidebar li.active{
        background: #ffffff;
        border-radius: 8px; 
      }

      .sidebar li.active a, .sidebar li.active a:hover{
        color: #000146;
      }

      .sidebar li a{
        color: #ffffff;
      }

      /*Contenido*/
      .content{
        height: 100vh;
        width: 100%;
        padding: 20px;
      }


      .section-content {
        display: none;
      }

      .section-content.active {
        display: block;
      }

      hr.line-color{
        background: #ffffff;
      }
    </style>

</head>
<body>
      <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
          <div class="header-box px-2 pt-3 pb-4">
            <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2" onclick="window.location.href='http://juegosonline.test/home'">CF</span> <span class="text-white">CastleSoft</span></h1>

            <!-- Imagen del usuario -->
            <img src="/images/prueba4.jpeg" alt="User Image" class="user-image">
            <span class="bg-white rounded-pill text-dark py-0 px-2">Julanito@gmail.com</span>

            <button class="btn d-md-none close-btn px-1 py-0 text-white"><i class="fa-solid fa-bars"></i></button>
          </div>
          
          <!-- Opciones pincipales del sidebar -->
          <ul class="list-unstyled">
            <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block" data-target="inicio"><i class="fa-solid fa-house"></i> Inicio</a></li>
            <li><a href="#" class="text-decoration-none px-3 py-2 d-block" id="juegos2"><i class="fa-solid fa-gamepad"></i> Juegos</a></li>
           <!-- <li><a href="#" class="text-decoration-none px-3 py-2 d-block" data-target="juegos"><i class="fa-solid fa-gamepad"></i> Juegos</a></li> -->
            <li><a href="#" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between" data-target="resultados">
             <span> <i class="fa-solid fa-square-poll-vertical"></i> Resultados</span>
             <span class="bg-white rounded-pill text-dark py-0 px-2">02</span>
            </a></li>
            <li><a href="#" class="text-decoration-none px-3 py-2 d-block" data-target="ayuda"><i class="fa-solid fa-circle-info"></i> Ayuda</a></li>
          </ul>
          <hr class="line-color mx-2">

          <!-- Configuraciones y cierre de sesión -->
          <ul class="list-unstyled px-2">
            <li><a href="#" class="text-decoration-none px-3 py-2 d-block" data-target="configuracion"><i class="fa-solid fa-gear"></i> Configuración</a></li>
            <li><a href="#" class="text-decoration-none px-3 py-2 d-block" id="logout"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</a></li>

          </ul>
        </div>
        
        <!-- Contenido dinámico a la derecha -->
        <div class="content">
          <div id="inicio" class="section-content active">
            <h2>Bienvenido a Inicio</h2>
            <p>Aquí puedes ver la página principal del sistema.</p>
            <a href="/home" type="button">Ir al home </a>
          </div>

          <div id="juegos" class="section-content">
            <h2>Juegos</h2>
            <p>Encuentra aquí la lista de juegos disponibles.</p>
          </div>

          <div id="resultados" class="section-content">
            <h2>Resultados</h2>
            <p>Aquí verás los resultados de los juegos.</p>
          </div>

          <div id="ayuda" class="section-content">
            <h2>Ayuda</h2>
            <p>¿Necesitas ayuda? Aquí encontrarás respuestas a tus preguntas.</p>
          </div>

          <div id="configuracion" class="section-content">
            <h2>Configuración</h2>
            <p> ajustar la configuración del sistema.</p>
          </div>
        </div>
      </div>

      <!--Funcion para cambiar de color al pulsar un elemento-->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function(){
          // Seleccionar todos los elementos "li" del sidebar
          $(".sidebar li a").on('click', function(e){
            e.preventDefault(); 

            // Remover la clase 'active' del elemento que está actualmente activo
            $(".sidebar li.active").removeClass('active');
            // Añadir la clase 'active' al elemento sobre el que se hace clic
            $(this).parent().addClass('active');

            // Mostrar la sección correspondiente al clic
            var target = $(this).data('target'); 
            $(".section-content").removeClass('active'); // Ocultar todas las secciones
            $("#" + target).addClass('active'); 
          });

            // Función para cerrar sesión
            $("#logout").on('click', function(e) {
            e.preventDefault();
            // Redirigir a la ruta de cierre de sesión (modifica la ruta según tu backend)
            window.location.href = "/login"; 
          });
          $("#juegos2").on('click', function(e) {
            e.preventDefault();
            window.location.href = "/home"; 
          });
        });
      </script>
</body>
</html>
