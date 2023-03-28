<?php
    include('conexion.php');
    $search = $_GET['search'];
    if(!empty($search)){
        $sql = "SELECT * FROM products WHERE (id = '{$search}' OR nombre LIKE '$search%' OR marca LIKE '$search%' OR detalles LIKE '$search%') AND eliminado = 0";
        $result = mysqli_query($conexion, $sql);
    }
    else if (empty($search)){
        $sql = "SELECT * FROM products WHERE eliminado = 0";
        $result = mysqli_query($conexion, $sql);
    };

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