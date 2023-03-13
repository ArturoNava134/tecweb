<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
      ol, ul { 
      list-style-type: none;
      }
    </style>
    <title>Formulario</title>
</head>
<body>
    <?php
$id = $_POST['id'];
$name = $_POST['nombre'];
$model = $_POST['modelo'];
$price = $_POST['precio'];
$units = $_POST['unidades'];
$details = $_POST['detalles'];
$img = $_POST['imagen'];
?>
    <h1>Productos</h1>

    <form id="miFormulario" onsubmit="" method="post" action="http://localhost:8080/tecnologiasweb/practicas/p07/update_producto.php">
        <fieldset>
            <legend>Actualiza los datos de este producto:</legend>
            <ul>
            <li><label for="form-id">ID:</label> <input type="text" name="id" id="form-id" value="<?= !empty($_POST['id'])?$_POST['id']:$_GET['id'] ?>" ></li>
            <li><label for="form-name">Nombre:</label> <input type="text" name="name" id="form-name" value="<?= !empty($_POST['nombre'])?$_POST['nombre']:$_GET['nombre'] ?>" ></li>
                <fieldset>
                    <legend>Marca:</legend>
                    <div>
                      <input type="radio" id="form-brand" name="brand" value="totis">
                      <label for="form-brand">Totis</label>
                    </div>
                    <div>
                      <input type="radio" id="form-brand" name="brand" value="sabritas">
                      <label for="form-brand">Sabritas</label>
                    </div>
                    <div>
                      <input type="radio" id="form-brand" name="brand" value="lala">
                      <label for="form-brand">Lala</label>
                    </div>
                    <div>
                      <input type="radio" id="form-brand" name="brand" value="CocaCola">
                      <label for="form-brand">CocaCola</label>
                    </div>
                </fieldset>
            <li><label for="form-model">Modelo:</label> <input type="model" name="model" id="form-model" value="<?= !empty($_POST['modelo'])?$_POST['modelo']:$_GET['modelo'] ?>"></li>
            <li><label for="form-price">Precio:</label><input type="price" name="price" id="form-price" value="<?= !empty($_POST['precio'])?$_POST['precio']:$_GET['precio'] ?>"></li>
            <li><label for="form-details">Detalles:</label><input type="detalis" name="details" id="form-details" value="<?= !empty($_POST['detalles'])?$_POST['detalles']:$_GET['detalles'] ?>"></li>
            <li><label for="form-units">Unidades:</label><input type="units" name="units" id="form-units" value="<?= !empty($_POST['unidades'])?$_POST['unidades']:$_GET['unidades'] ?>"></li>
            <li><label for="form-units">Ubicacion de imagen:</label>
            <br><input type="img" name="img" id="form-img" value="<?= !empty($_POST['imagen'])?$_POST['imagen']:$_GET['imagen'] ?>"></li>
            </ul>
        </fieldset>
        <p>
            <input type="submit" value="ACTUALIZAR">
        </p>
    </form>
</body>
</html>