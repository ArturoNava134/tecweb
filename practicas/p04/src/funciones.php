<?php

function multiplo5y7($numero) {
    if (isset($_GET['numero'])) {
        $number = $_GET['numero'];
      
        if ($number % 5 == 0) {
          echo " $number es un múltiplo de 5 <br>";
        } else {
          echo " $number no es un múltiplo de 5<br>";
        }
      }
      if ($number % 7 == 0){
        echo " $number es multiplo de 7<br>";
      } else {
        echo " $number no es multiplo de 7<br>";
      }
    
    
    return 'respuesta: '.$numero;
}

function matriz() {
    $M = 4;
    $resultados = array();
    $iteraciones = 0;
  
    while (count($resultados) < $M) {
        $n1 = rand(1, 100);
        $n2 = rand(1, 100);
        $n3 = rand(1, 100);
        if (($n1 % 2 != 0) && ($n2 % 2 == 0) && ($n3 % 2 != 0)) {
            array_push($resultados, array($n1, $n2, $n3));
        }
        $iteraciones++;
    }
  
    echo "Número de iteraciones: " . $M . "<br>";
    echo "Cantidad de números generados: " . $M * 3 . "<br><br>";
    echo "Matriz de resultados:<br>";
    foreach ($resultados as $fila) {
        echo implode(" ", $fila) . "<br>";
    }
}

function randomnumbers()
{
  $i=1;
      while($i<=20)
      {
          echo rand(1,100) . "<br>";
          $i++;
      }
}

function ciclowhile()
{
    if (isset($_GET['numero'])) {
        $given_number = $_GET['numero'];
        $random_number = rand(1, 100);
      
        while ($random_number % $given_number != 0) {
          $random_number = rand(1, 100);
        }
      
        echo "<br>El primer número entero aleatorio múltiplo de $given_number es $random_number.";
      }else{
      
    }
function dowhile()
{
$numero = (int)$_GET['numero'];
$respuesta = rand(1, 100);

do {
    $respuesta = rand(1, 100);
   } while ($respuesta % $numero != 0);

echo "<br>El primer número aleatorio múltiplo de $numero es: $respuesta";
}
      
function ejercicio4()
{
    $arr = [];
for ($i = 97; $i < 123; $i++) {
    $arr[$i] = chr($i);
}

echo "<table border='1'>";
foreach ($arr as $index => $value) {
    echo "<tr>";
    echo "<td>$index</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}
    echo"</table>";
}      
}

function ejercicio5(){
			$age = $_POST['edad'];
            $sex = $_POST['sexo'];

            if (!empty($age)&&!empty($sex)) {
                echo '<p>Edad: '.$age.'<br>';
                echo 'Sexo: '.$sex.'</p>';
            }

				if ($sex == 'masculino'){
					echo "No cumples con los requisitos.";
				}else if ($sex == 'femenino' && $age >= 18 && $age <= 35) {
					echo "Bienvenida, usted está en el rango de edad permitido.";
				}else {
					echo "No cumples con la edad requerida.";
				}
}

function filtro(){
    $matriculas = ['UBN6338', 'UBN6339', 'UBN6340', 'UBN6341', 'UBN6342', 'UBN6343', 'UBN6344', 'UBN6345', 'UBN6346', 'UBN6347', 'UBN6348', 'UBN6349', 'UBN6350', 'UBN6351', 'UBN6352'];

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
    
    
}


?>