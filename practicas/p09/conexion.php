<?php
    $conexion =
    @$link = new mysqli('localhost', 'root', '123456', 'marketzone');
    mysqli_set_charset($conexion, "utf8");
    
    // if ($conexion == true){
    //     echo "Conexión establecida";
    // }else{
    //     echo "No se pudo establecer la conexión";
    // }
?>