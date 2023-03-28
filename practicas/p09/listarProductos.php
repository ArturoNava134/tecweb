<?php
    include_once __DIR__.'conexion.php';
    $eliminado = $_GET['eliminado'];
    // SE CREA EL ARREGLO QUE SE VA A DEVOLVER EN FORMA DE JSON
        $sql = "SELECT * FROM products WHERE eliminado = '{$eliminado}'";
        $result = mysqli_query($conexion, $sql);
    // else if (empty($search)){
    //     $sql = "SELECT * FROM products WHERE eliminado = 0";
    //     $result = mysqli_query($conexion, $sql);
    // }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'marca' => $row['marca'],
            'modelo' => $row['modelo'],
            'precio' => $row['precio'],
            'detalles' => $row['detalles'],
            'unidades' => $row['unidades'],
            'imagen' => $row['imagen'],
            'eliminado' => $row['eliminado']
        );
    } 
    echo json_encode($json, JSON_PRETTY_PRINT);
    //$jsonstring = json_encode($json);
   // echo $jsonstring;
?>