<?php
if(isset($_GET['tope']))
    {
		$tope = $_GET['tope'];
    }
    else
    {
        die('Parámetro "tope" no detectado...');
    }

    include("conexion.php");
    $products = "SELECT * FROM products WHERE unidades <= $tope";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
   
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Producto</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<h3>PRODUCTOS</h3>                

			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
					<th scope="col">Precio</th>
					<th scope="col">Unidades</th>
					<th scope="col">Detalles</th>
					<th scope="col">Imagen</th>
					<th scope="col">Eliminado</th>
					<th scope="col"></th>
					</tr>
				</thead>
            <?php $resultado = mysqli_query($conexion, $products);
            while($row=mysqli_fetch_assoc($resultado)) {?>
        
				<tbody>
					<tr>
                        <td><?php echo $row['id'] ?></td>
						<td><?php echo $row['nombre'] ?></td>
						<td><?php echo $row['marca'] ?></td>
						<td><?php echo $row['modelo'] ?></td>
						<td><?php echo $row['precio'] ?></td>
						<td><?php echo $row['unidades'] ?></td>
						<td><?php echo $row['detalles'] ?></td>
						<td><img src=<?= $row['imagen'] ?> ></td>
						<td><?php echo $row['eliminado'] ?></td>
						<?php 
						$id = $row['id'];
						$name = $row['nombre'];
						$model = $row['modelo'];
						$price = $row['precio'];
						$units = $row['unidades'];
						$details = $row['detalles'];
						$img = $row['imagen'];
						?>
						<form name="formularioEditar" method="post" action="http://localhost:8080/tecnologiasweb/practicas/p07/formulario_productos_v3.php">
							<input name="id" id="form-name" value="<?= $id ?>">
							<input name="nombre" id="form-name" value="<?= $name ?>">
							<input name="modelo" id="form-model" value="<?= $model ?>">
							<input name="precio" id="form-price" value="<?= $price ?>">
							<input name="unidades" id="form-units" value="<?= $units ?>">
							<input name="detalles" id="form-details" value="<?= $details ?>">
							<input name="imagen" id="form-img" value="<?= $img ?>">
                    </div>
						<td><input name="boton" type="submit" value="Editar">
						</form>
					</tr>
				</tbody>
                <?php } ?>
			</table>
	</body>
</html>