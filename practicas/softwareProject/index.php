
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Comedor BUAP</title>
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
     <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
   <header class="header">
      <div class="contenedor">
       <a title="Inicio" href="index.php"> <img src="img/logo.jpg"  title="" width="" class="logo"></a>
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
          <ul class="menu">
            <li class="menu__item"><a href="contacto.html" class="menu__link">Contacto</a></li>
            <li class="menu__item"><a href="repartidor.html" class="menu__link">Repartidor</a></li>
            <?php if(isset($_COOKIE['username'])) {
              $user = $_COOKIE['username'];

              echo "<a class='menu__link'>$user</a>";
              // echo "<li class='menu__item'><a href='http://localhost:8080/tecnologiasweb/practicas/softwareProject/backend/cerrarSesion.php' class='menu__link'>Cerrar sesión</a></li>";
            }else{
              echo "<li class='menu__item'><a href='registro.html' class='menu__link'>Registrarse</a></li>";
              echo "<li class='menu__item'><a href='login.php' class='menu__link'>Iniciar sesión</a></li>";
            }

?>
            <li class="menu__item"><?php $user ?></li>

          </ul>
        </nav>
      </div>
    </header>
    <div class="banner"> 
        <img src="img/banner.jpg" alt"" title="" >
         <div class="contenedor">
        <h1 class="banner__titulo">Comedor BUAP</h1>
        <p class="banner__txt">Nutrición para la Educación</p>
        </div>
    </div>
   
    <main class="main">
        
             <section class="info">
                 <div class="contenedor">
          <article class="info__columna">
            <img src="img/1.jpg" alt="" class="info__img">
            <h2 class="info__titulo">Selecciona tu cafetería</h2>
            <p class="info__txt">Ordena tus productos o alimentos de las 5 cafeterías disponibles en la universidad.</p>
          </article>
          <article class="info__columna">
            <img src="img/2.jpg" alt="" class="info__img">
            <h2 class="info__titulo">Selecciona tus productos</h2>
            <p class="info__txt">Agrega tus productos a un carrito de compra, podrás pagar con diferentes métodos de pago.</p>
          </article>
          <article class="info__columna">
            <img src="img/3.jpg" alt="" class="info__img">
            <h2 class="info__titulo">Pídelo para llevar</h2>
            <p class="info__txt">Puedes escoger la opción de que los productos te lleguen a donde sea que te encuentres
              dentro de la universidad o recogerlo más tarde.
            </p>
          </article>
            </div>
          </section>
                     
            <section class="platos">
                <div class="contenedor">
                <h2 class="platos__titulo">Nuestras cafeterías</h2>
                <p class="platos__txt">Podrás seleccionar cualquier producto disponible de las siguientes cafeterías, 
                 cada una cuenta con sus propios menús de comida.
                </p>
                  <div class="platos__columna">
                    <a href="./cafeterias/skyGarden/skyGarden.php">
                      <img src="img/SkyGarden.png" alt="" class="platos__img">
                    </a>
                    <h3>Sky Garden </h3>
                  </div>
                    
                <div class="platos__columna">
                  <a href="./cafeterias/quimica/quimica.php">
                        <img src="img/Quimica.png" alt=""  class="platos__img">
                      </a>
                        <h3>Cafetería de química</h3>
                    </div>
                <div class="platos__columna">
                  <a href="./cafeterias/computacion/computacion.php">
                        <img src="img/Computacion.png" alt=""  class="platos__img">
                      </a>
                        <h3>Cafetería de computación</h3>
                    </div>
                <div class="platos__columna">
                        <a href="./cafeterias/italian/italian.php">
                        <img src="img/Italian.png" alt=""  class="platos__img">
                      </a>
                        <h3>Italian Coffee</h3>
                    </div>
                <div class="platos__columna">
                  <a href="./cafeterias/arquitectura/arquitectura.php">
                      <img src="img/Arquitectura.png" alt="" class="platos__img">
                    </a>
                      <h3>Cafetería de arquitectura </h3>
                  </div>
            </section>
            <section class="mapa">
                  <div class="contenedor">
                <div class="mapa__iframe">
                     <h3>-Cafeterías Universitarias-</h3>
                    <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Ciudad universitaria buap&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="90%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
           
                 </div>
            </section> 
    </main>
    <footer class="footer">
         <div class="social">
            <img src="img/logo.jpg" alt"" title="" >
             </div>
         </footer>
          <script src="js/menu.js"></script>
</body>
</html>