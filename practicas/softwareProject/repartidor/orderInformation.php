<?php
  include('../conexion.php');
?>
<!DOCTYPE html>

<html lang="es">
<head>
<meta charset="utf-8">
    <title>Comedor BUAP</title>
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
     <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
 <?php
  $id = $_POST['id'];
  $campus = $_POST['campus'];
  $facultad = $_POST['facultad'];
  $salon = $_POST['salon'];
  $telefono = $_POST['telefono'];
  $descripcion = $_POST['descripcion'];
  $monto = $_POST['monto'];
  ?>
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
  <head>
    <meta charset="UTF-8">
    <title>Delivery Page</title>
    <style>
      body {
        background-color: white;
        font-family: Arial, sans-serif;
      }
      .section {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid blue;
      }
      .section h2 {
        margin-top: 0;
      }
      .btn-delivered {
        background-color: blue;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
      }
      .btn-delivered:hover {
        background-color: navy;
      }
      .label {
        display: block;
        margin-bottom: 5px;
      }
      input[type="text"] {
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 16px;
      }
    </style>
  </head>
  <body>
    <div class="section">
      <h2>Detalles del pedido</h2>
     
      <div class="label">Orden de id:</div>
      <fieldset>
      <li> <input type="id" name="id" id="form-id" value="<?= !empty($_POST['id'])?$_POST['id']:$_GET['id'] ?>"></li>
      </fieldset>
    
    </div>
    <div class="section">
      <h2>Dirección de entrega</h2>
      <div class="label">Campus:</div>
      <fieldset>
      <li><input type="campus" name="campus" id="form-campus" value="<?= !empty($_POST['campus'])?$_POST['campus']:$_GET['campus'] ?>"></li>
      </fieldset>
      <div class="label">Facultad:</div>
      <li><input type="facultad" name="facultad" id="form-facultad" value="<?= !empty($_POST['facultad'])?$_POST['facultad']:$_GET['facultad'] ?>"></li>
      <div class="label">Salón:</div>
      <li><input type="salon" name="salon" id="form-salon" value="<?= !empty($_POST['salon'])?$_POST['salon']:$_GET['salon'] ?>"></li>
      <div class="label">Teléfono:</div>
      <li><input type="telefono" name="telefono" id="form-telefono" value="<?= !empty($_POST['telefono'])?$_POST['telefono']:$_GET['telefono'] ?>"></li>
    </div>
    <div class="section">
      <h2>Monto a cobrar</h2>
      <div class="label">Total:</div>
      <li><input type="monto" name="monto" id="form-monto" value="<?= !empty($_POST['monto'])?$_POST['monto']:$_GET['monto'] ?>"></li>
    </div>
    <form name="formularioEditar" method="post" action="http://localhost:8080/tecnologiasweb/practicas/softwareProject/backend/delivered.php">
      <input type = "hidden"name="id" id="form-name" value="<?= $id ?>">
    <button class="btn-delivered">Pedido entregado</button>
    </form>
  </body>
</html>
