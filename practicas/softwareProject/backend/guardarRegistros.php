<?php 
include("conexion.php");

$url = "http://localhost:8080/tecnologiasweb/practicas/softwareProject/login.php";

function redirect($url)
{
   header('Location: ' . $url, true);
   die();
}

$nombre = $_POST['nombre'];
$password = $_POST['password'];


$sql = "INSERT INTO regisros VALUES(null, '{$nombre}', '{$password}')";
if ($link->query($sql)){
    echo 'Se registró correctamente. ', $nombre, $password;
    redirect($url);
    }else
    {
        echo 'El Producto no pudo ser actualizado =(';
    }
    $link->close();
?>