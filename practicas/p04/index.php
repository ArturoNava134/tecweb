<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 3</title>
    <style type="text/css">
      ol { 
      list-style-type: none;
      }
    </style>
</head>
<body>
    <?php
    require_once __DIR__.'/src/funciones.php';
    ?>
    <div>
        <h3>Ejercicio 1</h3>
        <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</p>
        <p>
            R: <br>
            <?php
            if (!empty($_GET['numero'])) {
                $numero = $_GET['numero'];
                echo multiplo5y7($numero);
            } else {
                echo '(vacío)';
            }
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 2</h3>
        <p>
            Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una secuencia compuesta por:
            <br><strong>impar, par, impar</strong>
        </p>
        <p>
            R:
            <?php
              echo matriz();
              ?>
            </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 3</h3>
        <p>Utiliza un ciclo <strong>while</strong> para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.</p>
        <p>
            R:
            <?php
                echo ciclowhile();
                echo dowhile();
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 4</h3>
        <p>Crear un arreglo cuyos <strong>índices</strong> van de 97 a 122 y cuyos <strong>valores</strong> son las letras de la 'a' a la 'z'. Usa la función <strong>chr(n)</strong> que devuelve el caracter cuyo código ASCII es <strong>n</strong> para poner el valor en cada índice. Es decir:</p>
        <p>
            [97] => a <br>
            [98] => b <br>
            [99] => c <br>
            … <br>
            [122] => z
        </p>
        <p>
            R:
            <?php
             echo ejercicio4();
            ?>
        </p>
    </div>
    <div>
        <h3>Ejercicio 5</h3>
        <p>Crear un arreglo cuyos <strong>índices</strong> van de 97 a 122 y cuyos <strong>valores</strong> son las letras de la 'a' a la 'z'. Usa la función <strong>chr(n)</strong> que devuelve el caracter cuyo código ASCII es <strong>n</strong> para poner el valor en cada índice. Es decir:</p>
        <p>
            [97] => a <br>
            [98] => b <br>
            [99] => c <br>
            … <br>
            [122] => z
        </p>
        <p>
            R:
            <?php
            echo ejercicio5();
            ?>
        </p>
    </div>
    <div>
        <h3>Ejercicio 6</h3>
        <p>
            Usar las variables <strong>$edad</strong> y <strong>$sexo</strong> en una instrucción if para identificar una persona de sexo "femenino", 
            cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de bienvenida apropiado. Por ejemplo:
        </p>
        <p>
            <em>Bienvenida, usted está en el rango de edad permitido.</em>
        </p>
        <p>
            En caso contrario, deberá devolverse otro mensaje indicando el error.
        </p>
        <ul>
            <li>Los valores para $edad y $sexo se deben obtener por medio de un formulario en HTML.</li>
            <li>Utilizar el la Variable Superglobal $_POST (revisar documentación).</li>
        </ul>
        <p>
            R:
            <h1>Consulta de información de todos los autos</h1>
            <form action="./src/script2.php" method="post">
              <label for="todos">Consultar todos los autos registrados</label>
              <br><br>
              <input type="submit" value="Consultar">
           </form>
           <h1>Consulta de información de autos por matrícula</h1>
           <br>
           <label> Las matrículas disponibles son las siguientes: 'UBN6338', 'UBN6339', 'UBN6340', 'UBN6341', 'UBN6342', 'UBN6343', 'UBN6344', 'UBN6345', 'UBN6346', 'UBN6347' </label>
           <br>
           <br>
            <form action="./src/script3.php" method="post">
            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula">
            <br>
              <label for="por_matricula">Consultar por matrícula</label>
              <input type="submit" value="Consultar">
              </form>
        </p>

        <form id="formulario2" action="./src/script1.php" method="post">
        <fieldset>
            <legend>Información Personal</legend>
            <ol>
            <li><label>Edad:</label> <input type="text" name="edad"></li>
            <li><label>Sexo:</label> <input type="text" name="sexo"></li>
            </ol>
        </fieldset>
        <p>
        <input type="submit" value="ir a la página" />
        </p>
        </form>
        <form id="formulario1" method="post">
        <fieldset>
            <legend>Información Personal</legend>
            <ol>
            <li><label>Edad:</label> <input type="text" name="edad"></li>
            <li><label>Sexo:</label> <input type="text" name="sexo"></li>
            </ol>
        </fieldset>
        <p>
            <input type="submit" value="¡OK!"> 
        </p>
        </form>
    </div>
</body>
</html>