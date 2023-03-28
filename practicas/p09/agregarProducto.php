<?php
    include('conexion.php');
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['description'];
   // $sql = "INSERT INTO repartidores VALUES(null, '{$nombre}', '{$matricula}', '{$telefono}')";

        $sql = "INSERT INTO products VALUES (null, '$nombre')"; 
        $result = mysqli_query($conexion, $sql);

    // $json = array();
    // while($row = mysqli_fetch_array($result)){
    //     $json[] = array(
    //         'id' => $row['id'],
    //         'nombre' => $row['nombre'],
    //         'marca' => $row['marca'],
    //         'modelo' => $row['modelo'],
    //         'precio' => $row['precio'],
    //         'detalles' => $row['detalles'],
    //         'unidades' => $row['unidades'],
    //         'imagen' => $row['imagen'],
    //         'eliminado' => $row['eliminado']
    //     );
    // } 
    // echo json_encode($json, JSON_PRETTY_PRINT);
    //$jsonstring = json_encode($json);
   // echo $jsonstring;
?>