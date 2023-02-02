

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
<html>
<head>
    <title>Práctica 3</title>
</head>
<body>
    <h2>Inciso 2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    <?php 
    $a = "manejadorql";
    echo "$a<br>";

    $b = "MySQL";
    echo "$b<br>";

    $c = "&$a";
    echo "$c<br>";

    $a = 'PHP server';
    $b = &$a;
    $espacio = '<br>';
    echo $espacio;
    echo 'Segundo bloque';
    echo $espacio;
    echo $a;
    echo $espacio;
    echo $b;
    ?>
    </body>
    </html>
   