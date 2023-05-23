<?php 
include('conexion.php');

$url = "http://localhost:8080/tecnologiasweb/practicas/softwareProject/admin/skyGardenStock.php";

function redirect($url)
{
   header('Location: ' . $url, true);
   die();
}

$id = $_POST['id'];


$query = "UPDATE skygardenStock SET stock = stock-1 WHERE id={$id}";
if ($link->query($query)){
   echo 'Se redució correctamente. ', $id;
   redirect($url);
   }else
   {
       echo 'La orden no pudo ser actualizada =(';
   }
   $link->close();

?>