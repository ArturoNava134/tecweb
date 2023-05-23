<?php
    include('../conexion.php');
    $orders = "SELECT * FROM Orders WHERE Entregado = 0";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
   
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Orders</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<h3>Ordenes disponibles</h3>                

			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">#</th>
					<th scope="col">Campus</th>
					<th scope="col">Facultad</th>
					<th scope="col">Salon</th>
					<th scope="col">Telefono</th>
					<th scope="col">Descripcion</th>
					<th scope="col">Monto</th>
					<th scope="col"></th>
					</tr>
				</thead>
            <?php $resultado = mysqli_query($conexion, $orders);
            while($row=mysqli_fetch_assoc($resultado)) {?>
        
				<tbody>
					<tr>
                        <td><?php echo $row['id'] ?></td>
						<td><?php echo $row['Campus'] ?></td>
						<td><?php echo $row['Facultad'] ?></td>
						<td><?php echo $row['Salon'] ?></td>
						<td><?php echo $row['Telefono'] ?></td>
						<td><?php echo $row['Descripcion'] ?></td>
						<td><?php echo $row['Monto'] ?></td>
						<?php 
						$id = $row['id'];
						$Campus = $row['Campus'];
						$Facultad = $row['Facultad'];
						$Salon = $row['Salon'];
						$Telefono = $row['Telefono'];
						$Descripcion = $row['Descripcion'];
						$Monto = $row['Monto'];
						?>
						
						<form name="formularioEditar" method="post" action="http://localhost:8080/tecnologiasweb/practicas/softwareProject/repartidor/orderInformation.php">
							<input type = "hidden"name="id" id="form-name" value="<?= $id ?>">
							<input type = "hidden" name="campus" id="form-campus" value="<?= $Campus ?>">
							<input type = "hidden" name="facultad" id="form-facultad" value="<?= $Facultad ?>">
							<input type = "hidden" name="salon" id="form-salon" value="<?= $Salon ?>">
							<input type = "hidden" name="telefono" id="form-telefono" value="<?= $Telefono ?>">
							<input type = "hidden" name="descripcion" id="form-descripcion" value="<?= $Descripcion ?>">
							<input type = "hidden" name="monto" id="form-monto" value="<?= $Monto ?>">
                    </div>
						<td><input name="boton" type="submit" value="Elegir">
						</form>
					</tr>
				</tbody>
                <?php } ?>
			</table>
	</body>
</html>