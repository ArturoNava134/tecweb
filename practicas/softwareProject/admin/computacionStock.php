<?php
include('../conexion.php');
$stock = "SELECT * FROM computacionStock where eliminado = 0";

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computación</title>
    <script src="https://kit.fontawesome.com/df59baf6b8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <script defer src="../backend/modal.js"></script>
    <script defer src="../app.js"></script>
	<title>Tabla de Productos Disponibles</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
		tr:hover {
			background-color: #f5f5f5;
		}
	</style>
</head>
<body>
    <header class="header">
        <div class="contenedor">
         <a title="Inicio" href="../index.php"> <img src="../img/logo.jpg"  title="" width="" class="logo"></a>
          <span class="icon-menu" id="btn-menu"></span>
          <nav class="nav" id="nav">
            <ul class="menu">
              <li class="menu__item"><a href="../contacto.html" class="menu__link">Contacto</a></li>
              <li class="menu__item"><a href="../repartidor.html" class="menu__link">Repartidor</a></li>
             
            </ul>
          </nav>
        </div>
      </header> 
      <br>

<body>
	<h2>Tabla de Productos Disponibles</h2>
	<table>
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Producto</th>
				<th scope="col">Descripción</th>
				<th scope="col">Precio</th>
				<th scope="col">Existencias</th>
				<th scope="col"></th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<?php $resultado = mysqli_query($conexion, $stock);
            while($row=mysqli_fetch_assoc($resultado)) {?>
		<tbody>
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['producto'] ?></td>
				<td><?php echo $row['descripcion'] ?></td>
				<td><?php echo $row['precio'] ?></td>
				<td><?php echo $row['stock'] ?></td>
				

				<?php 
						$id = $row['id'];
				?>
				<form name="formularioReducir" method="post" action="http://localhost:8080/tecnologiasweb/practicas/softwareProject/backend/reducirStockComputacion.php">
							<input type = "hidden"name="id" id="form-name" value="<?= $id ?>">
							<td><input name="boton" type="submit" value="Reducir">			
				</form>
				<form name="formularioAumentar" method="post" action="http://localhost:8080/tecnologiasweb/practicas/softwareProject/backend/aumentarStockComputacion.php">
					<input type = "hidden"name="id" id="form-name" value="<?= $id ?>">
					<td><input name="boton" type="submit" value="aumentar">
				</form>
						
				<form name="formularioEliminar" method="post" action="http://localhost:8080/tecnologiasweb/practicas/softwareProject/backend/eliminarProductoComputacion.php">
					<input type = "hidden"name="id" id="form-name" value="<?= $id ?>">
					<td><input name="boton" type="submit" value="eliminar">
				</form>

				</tr>
		</tbody>
		<?php } ?>
	</table>
	<form method="post" action="http://localhost:8080/tecnologiasweb/practicas/softwareProject/backend/agregarProductoComputacion.php">
		<h2>Formulario para agregar Producto</h2><br>
		<input class="control" name="Producto" id="form-product" placeholder="Producto"><br><br>
		<input class="control" size="30" style="height: 120px" name="Descripcion" id="form-description" placeholder="                    Descripcion"><br><br>
		<input class="control" name="Precio" id="form-price" placeholder="Precio"><br><br>
		<input class="control" name="Stock" id="form-stock" placeholder="Existencias"><br><br>
        <input class="boton" type="submit" name="boton" required value="Agregar Producto">
	</form>
</body>
</html>
