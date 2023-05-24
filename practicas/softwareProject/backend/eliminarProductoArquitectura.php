<?php 
include('conexion.php');

$url = "http://localhost:8080/tecnologiasweb/practicas/softwareProject/admin/arquitecturaStock.php";

function redirect($url)
{
   header('Location: ' . $url, true);
   die();
}

$id = $_POST['id'];


$query = "UPDATE arquitecturaStock SET eliminado = 1 WHERE id={$id}";
if ($link->query($query)){
   echo 'Se eliminó correctamente correctamente. ', $id;
   redirect($url);
   }else
   {
       echo 'El producto no pudo ser eliminado =(';
   }
   $link->close();

?>