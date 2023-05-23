<?php 
include('conexion.php');

$url = "http://localhost:8080/tecnologiasweb/practicas/softwareProject/index.php";

function redirect($url)
{
   header('Location: ' . $url, true);
   die();
}

$query = "INSERT INTO orders VALUES(null, 'CU', 'FCC', 301, 2461340981, 230.00, '', 0, 'Hamburguesa con papas')";
if ($link->query($query)){
   echo 'Se agregó correctamente.';
   redirect($url);
   }else
   {
       echo 'No se pudo agregar';
   }
   $link->close();

?>