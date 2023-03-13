<?php
include("conexion.php");
$id = $_POST['id'];
$name = $_POST['name'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$price = $_POST['price'];
$details = $_POST['details'];
$units = $_POST['units'];
$imagen = $_POST['img'];
$deleted = 0;
if($imagen == null || $imagen == ""){
    $imagen = "img/defaultImage.png";
}

$sql = "UPDATE products SET nombre='{$name}', marca='{$brand}', modelo='{$model}', precio={$price}, detalles='{$details}', unidades={$units}, imagen='{$imagen}', eliminado='{$deleted}' WHERE id={$id}";
if ($link->query($sql)){
    echo 'Se actualizó el producto ', $name,' ', $brand,' ', $model,' ', $price,' ', $details,' ', $units,' ', $imagen,' ', $deleted;
    }else
    {
        echo 'El Producto no pudo ser actualizado =(';
    }
    $link->close();
?>