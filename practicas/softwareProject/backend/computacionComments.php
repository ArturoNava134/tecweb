<?php
    include("conexion.php");

    // SE CREA EL ARREGLO QUE SE VA A DEVOLVER EN FORMA DE JSON

    
    // SE REALIZA LA QUERY DE BÚSQUEDA Y AL MISMO TIEMPO SE VALIDA SI HUBO RESULTADOS
   $sql = "SELECT comentarios FROM computacionrates";
   
        // SE OBTIENEN LOS RESULTADOS
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Comentarios: " . $row["comentarios"]."<br>";
        }
    } else {
        echo "0 results";
    }
    $conexion->close();
    ?>
  