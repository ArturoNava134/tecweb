<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Consulta de autos</title>
		<style type="text/css">
			body {margin: 20px; 
			background-color: #C4DF9B;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style>
	</head>
	<body>
		<h1>RESPUESTA</h1>

		<?php


function randomnumberszerotonine()
{
  $i=1;
      while($i<=4)
      {
          echo rand(0,9) . "";
          $i++;
      }
}
function randomletters(){
    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $alphabet_length = strlen($alphabet);
    
    $random_letters = "";
    for ($i = 0; $i < 3; $i++) {
        $random_letter = $alphabet[rand(0, $alphabet_length - 1)];
        $random_letters .= $random_letter;
    }
}
function matricula(){
    echo "", randomletters(), "", randomnumberszerotonine();
}

$numeros = randomnumberszerotonine();
$letras = randomletters();
$matricula = "$letras $numeros";

$registroVehicular = array(

    $auto1 = array(
        " Matrícula" => "UBN6338",
        " Marca" => "Toyota",
        " Modelo" => "Camry",
        " Tipo" => "Sedán",
        " Nombre" => "Sofía García",
        " Ciudad" => "Guadalajara, Jal.",
        " Dirección" => "Av. México 123"
    ),
      
      $auto2 = array(
        " Matrícula" => "UBN6339",
        " Marca" => "Honda",
        " Modelo" => "Civic",
        " Tipo" => "Coupé",
        " Nombre" => "José Pérez",
        " Ciudad" => "Monterrey, N.L.",
        " Dirección" => "Calle 33 123"
      ),
      
      $auto3 = array(
        " Matrícula" => "UBN6340",
        " Marca" => "Nissan",
        " Modelo" => "Altima",
        " Tipo" => "Sedán",
        " Nombre" => "María Rodríguez",
        " Ciudad" => "Tijuana, B.C.",
        " Dirección" => "Blvd. Insurgentes 123"
      ),
      
      $auto4 = array(
        " Matrícula" => "UBN6341",
        " Marca" => "Mazda",
        " Modelo" => "3",
        " Tipo" => "Hatchback",
        " Nombre" => "Juan García",
        " Ciudad" => "Ciudad de México, D.F.",
        " Dirección" => "Calle de la Reforma 123"
      ),
      
      $auto5 = array(
        " Matrícula" => "UBN6342",
        " Marca" => "Chevrolet",
        " Modelo" => "Cruze",
        " Tipo" => "Sedán",
        " Nombre" => "Ana Sánchez",
        " Ciudad" => "León, Gto.",
        " Dirección" => "Av. Universidad 123"
      ),
    
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
        ),
    
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
        ),
    
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
        ),
    
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
        ),
    
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
        ),
);
            print_r($registroVehicular);
            ?>
        
	</body>
</html>