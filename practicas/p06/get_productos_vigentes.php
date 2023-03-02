  <?php
  include("conexion.php");

  $products = "SELECT * FROM products WHERE eliminado != 1";

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
					<th scope="col">Eliminado</th>
					<th scope="col">Imagen</th>
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
						<td><?php echo $row['eliminado'] ?></td>
						<td><img src=<?= $row['imagen'] ?> ></td>
						
					</tr>
				</tbody>
                <?php } ?>
			</table>
	</body>
</html>