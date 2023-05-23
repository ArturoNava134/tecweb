<?php
include("conexion.php");



$url = "http://localhost:8080/tecnologiasweb/practicas/softwareProject/index.php";



function redirect($url)
{
   header('Location: ' . $url, true);
   die();
}

$comentarios =  $_POST['comentarios'];

$sql = "INSERT INTO skygardenrates VALUES(null, '{$comentarios}', 5)";
if ($link->query($sql)){
    echo 'Se registró correctamente. ', $comentarios;
    redirect($url);
    }else
    {
        echo 'El comentario no pudo ser actualizado =(';
    }
    $link->close();
?>