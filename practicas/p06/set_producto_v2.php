<?php
include('conexion.php');
$name = $_POST['name'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$price = $_POST['price'];
$details = $_POST['details'];
$units = $_POST['units'];
$imagen = $_POST['img'];
$deleted = 0;

$select = "SELECT * FROM products WHERE marca = ? AND modelo = ?";
$stmt = $link->prepare($select);
$stmt->bind_param("ss",$brand, $model);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo "Ya existe un producto con la misma marca o modelo.";
}else{
$insert = "INSERT INTO products VALUES (null, '{$name}', '{$brand}', '{$model}', {$price}, '{$details}', {$units}, '{$imagen}', '{$deleted}')";
if ($link->query($insert)){
echo 'Se insertaron los productos ', $name,' ', $brand,' ', $model,' ', $price,' ', $details,' ', $units,' ', $imagen,' ', $deleted;
}else
{
    echo 'El Producto no pudo ser insertado =(';
}
}
$link->close();

?>
