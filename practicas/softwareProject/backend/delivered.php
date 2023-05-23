<?php
     include('conexion.php');
     $url = "http://localhost:8080/tecnologiasweb/practicas/softwareProject/repartidor/aviliableOrders.php";

function redirect($url)
{
   header('Location: ' . $url, true);
   die();
}
     $id = $_POST['id'];

     $delivered = "UPDATE Orders SET Entregado = 1 WHERE id={$id}";
     if ($link->query($delivered)){
        echo 'Se entregó correctamente. ', $id;
        redirect($url);
        }else
        {
            echo 'La orden no pudo ser actualizada =(';
        }
        $link->close();
?>