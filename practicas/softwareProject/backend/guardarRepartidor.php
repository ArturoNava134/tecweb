<?php 
include("conexion.php");


$url = "http://localhost:8080/tecnologiasweb/practicas/softwareProject/index.php";

function redirect($url)
{
   header('Location: ' . $url, true);
   die();
}


$nombre = $_POST['nombre'];
$matricula = $_POST['matricula'];
$telefono = $_POST['telefono'];


$sql = "INSERT INTO repartidores VALUES(null, '{$nombre}', {$matricula}, {$telefono})";
if ($link->query($sql)){
    echo 'Se registró correctamente. ', $nombre, $matricula, $telefono;
    redirect($url);
    }else
    {
        echo 'El Producto no pudo ser actualizado =(';
    }
    $link->close();
?>