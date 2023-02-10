<?php
$auto1 = array(
    " Matrícula" => "UBN6338",
    " Marca" => "Toyota",
    " Modelo" => "Camry",
    " Tipo" => "Sedán",
    " Nombre" => "Sofía García",
    " Ciudad" => "Guadalajara, Jal.",
    " Dirección" => "Av. México 123"
  );
  
  $auto2 = array(
    " Matrícula" => "UBN6339",
    " Marca" => "Honda",
    " Modelo" => "Civic",
    " Tipo" => "Coupé",
    " Nombre" => "José Pérez",
    " Ciudad" => "Monterrey, N.L.",
    " Dirección" => "Calle 33 123"
  );
  
  $auto3 = array(
    " Matrícula" => "UBN6340",
    " Marca" => "Nissan",
    " Modelo" => "Altima",
    " Tipo" => "Sedán",
    " Nombre" => "María Rodríguez",
    " Ciudad" => "Tijuana, B.C.",
    " Dirección" => "Blvd. Insurgentes 123"
  );
  
  $auto4 = array(
    " Matrícula" => "UBN6341",
    " Marca" => "Mazda",
    " Modelo" => "3",
    " Tipo" => "Hatchback",
    " Nombre" => "Juan García",
    " Ciudad" => "Ciudad de México, D.F.",
    " Dirección" => "Calle de la Reforma 123"
  );
  
  $auto5 = array(
    " Matrícula" => "UBN6342",
    " Marca" => "Chevrolet",
    " Modelo" => "Cruze",
    " Tipo" => "Sedán",
    " Nombre" => "Ana Sánchez",
    " Ciudad" => "León, Gto.",
    " Dirección" => "Av. Universidad 123"
  );

  $auto6 = array(
    " Matrícula" => "UBN6343",
    " Marca" => "Chevrolet",
    " Modelo" => "Camaro",
    " Tipo" => "Deportivo",
    " Propietario" => array(
    " Nombre" => "Juanita Martinez",
    " Ciudad" => "Monterrey, N.L.",
    " Dirección" => "Calle Rio Guadiana"
    )
);

$auto7 = array(
    " Matrícula" => "UBN6344",
    " Marca" => "Ford",
    " Modelo" => "Mustang",
    " Tipo" => "Deportivo",
    " Propietario" => array(
    " Nombre" => "Pedro Gonzalez",
    " Ciudad" => "Guadalajara, Jal.",
    " Dirección" => "Avenida Reforma"
    )
);

$auto8 = array(
    " Matrícula" => "UBN6345",
    " Marca" => "Nissan",
    " Modelo" => "GTR",
    " Tipo" => "Deportivo",
    " Propietario" => array(
    " Nombre" => "Isabel Rodriguez",
    " Ciudad" => "Mexico, D.F.",
    " Dirección" => "Calle Morelos"
    )
);

$auto9 = array(
    " Matrícula" => "UBN6346",
    " Marca" => "Honda",
    " Modelo" => "Civic",
    " Tipo" => "Sedán",
    " Propietario" => array(
    " Nombre" => "Eduardo Perez",
    " Ciudad" => "Tijuana, B.C.",
    " Dirección" => "Boulevard Agua Caliente"
    )
);

$auto10 = array(
    " Matrícula" => "UBN6347",
    " Marca" => "Toyota",
    " Modelo" => "Corolla",
    " Tipo" => "Sedán",
    " Propietario" => array(
    " Nombre" => "Marta Ramirez",
    " Ciudad" => "Ciudad Juárez, Chih.",
    " Dirección" => "Avenida Benito Juarez"
    )
);

/*
    function arrayfilter($elements, $query) {
        $found = [];
        foreach($elements as $element) {
          if(strpos($element, $query) !== false) {
            array_push($found, $element);
          }
        }
        return $found;
    } 
    
    var_dump(arrayFilter($matriculas, 'o'));
    */

    $matricula = $_POST['matricula'];
    if ($matricula == "UBN6338"){
        print_r($auto1);
    } else if ($matricula == "UBN6339"){
        print_r($auto2);
    } else if ($matricula == "UBN6340"){
        print_r($auto3);
    } else if ($matricula == "UBN6341"){
        print_r($auto4);
    } else if ($matricula == "UBN6342"){
        print_r($auto5);
    } else if ($matricula == "UBN6343"){
        print_r($auto6);
    } else if ($matricula == "UBN6344"){
        print_r($auto7);
    } else if ($matricula == "UBN6345"){
        print_r($auto8);
    } else if ($matricula == "UBN6346"){
        print_r($auto9);
    } else if ($matricula == "UBN6347"){
        print_r($auto10);
    }


?>