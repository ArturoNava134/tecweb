<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quimica</title>
    <script src="https://kit.fontawesome.com/df59baf6b8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">
    <script defer src="stock.js"></script>
    <script defer src="../../backend/modal.js"></script>
    <script defer src="../../app.js"></script>
</head>
<body>
    <header class="header">
        <div class="contenedor">
         <a title="Inicio" href="../../index.php"> <img src="../../img/logo.jpg"  title="" width="" class="logo"></a>
          <span class="icon-menu" id="btn-menu"></span>
          <nav class="nav" id="nav">
            <ul class="menu">
              <li class="menu__item"><a href="../../contacto.html" class="menu__link">Contacto</a></li>
              <li class="menu__item"><a href="repartidor.html" class="menu__link">Repartidor</a></li>
              <li class="menu__item"><button id="boton-carrito"><i class="fas fa-shopping-cart"></i><span id="contadorCarrito">0</span></button>  </li>
            </ul>
          </nav>
        </div>
      </header>
      <br>
     <h2>Cafetería de Química.</h2>
      

    <!--
    <select id="filtroTalle">
        <option value="all">Todos</option>
        <option value="L">Large</option>
        <option value="M">Medium</option>
        <option value="S">Small</option>
    </select>
    -->

    <main id="contenedor-productos">

    </main>

    <div class="modal-contenedor">
        <div class="modal-carrito">
            <h3>Carrito</h3>
            <br>
            <button id="carritoCerrar"><i class="fas fa-times-circle"></i></button>
            <div id="carrito-contenedor">
                <!-- <div class="productoEnCarrito">
                    <p>Buzo 1</p>
                    <p>Precio: $1200</p>
                    <button class="boton-eliminar"><i class="fas fa-trash-alt"></i></button>
                </div> -->
            </div>
            <p class="precioProducto">Precio total: $<span id="precioTotal">0</span></p>
            <i> Toma una captura de tu carrito de compra antes de proceder al pago.</i>
            <br>
            <br>
            <button id="vaciar-carrito" class="boton-agregar">Vaciar carrito</button>
            <a href="pagarQuimica.html">
            <button id="Pagar" class="boton-agregar">Pagar</button>
            </a>
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
    
    <div class="coment">
    
    <table class="table table-bordered table-sm">
        <thead>
          <tr>
            <h2 class="title">Comentarios</h2>
       
          </tr>
          <tr><?php
include("../../backend/quimicaComments.php");
?></tr>
        </thead>
       
        
        <tbody id="products"></tbody>
      </table>
</div>
</body>
</html>
