<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Comedor BUAP</title>
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/estilos3.css">
</head>
<body>
   <header class="header">
      <div class="contenedor">
      <a title="Inicio" href="../index.php"> <img src="../img/logo.jpg"  title="" width="" class="logo"></a>
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
          <ul class="menu">
            <li class="menu__item"><a href="../contacto.html" class="menu__link">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <h1>Por favor rellena el cuestionario para ser aspirante a repartidor y nos pondremos en contacto para entregarte tu nombre de usuario y contraseña.</h1>
    <hr>
    <br>
    <form class="form-register" name="formularioEditar" method="post" action="http://localhost:8080/tecnologiasweb/practicas/softwareProject/backend/guardarRepartidor.php">
      <h4>Comedor BUAP</h4>
      <input class="control" name="nombre" id="form-name" placeholder="Ingresa tu nombre">
      <input class="control" name="matricula" id="form-name" placeholder="Ingresa tu matrícula">
      <input class="control" name="telefono" id="form-name" placeholder="Ingresa tu telefono">
      
      <div align="CENTER">
        <input class="boton" type="submit" onclick="alert('Formulario Enviado')" value="Enviar">
      </div>
      
  </section>
   
    <footer class="footer">
        <div class="social">
           <img src="../img/logo.jpg" alt"" title="" >
            </div>
        
        </footer>
         <script src="js/menu.js"></script>
  </body>
  </html>