<?php 
include("conexion.php");


$url = "http://localhost:8080/tecnologiasweb/practicas/softwareProject/admin/quimicaStock.php";

function redirect($url)
{
   header('Location: ' . $url, true);
   die();
}


$producto = $_POST['Producto'];
$descripcion = $_POST['Descripcion'];
$precio = $_POST['Precio'];
$stock = $_POST['Stock'];


$sql = "INSERT INTO quimicastock VALUES(null, '{$producto}', '{$descripcion}', {$precio}, {$stock})";
if ($link->query($sql)){
    echo 'Se registró correctamente. ', $producto, $descripcion, $precio, $stock;
    redirect($url);
    }else
    {
        echo 'El Producto no pudo ser actualizado =(';
    }
    $link->close();
?>