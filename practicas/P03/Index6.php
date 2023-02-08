
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
<html>
<head>
    <title>Práctica 3</title>
</head>
<body>
    <h2>Inciso 6</h2>
    <p>Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas
    usando la función var_dump(<datos>).</p>
    <?php
    $a = '0';
    $b = 'TRUE';
    $c = FALSE;
    $d = ($a OR $b);
    $e = ($a AND $c);
    $f = ($a XOR $b);
    $g = 'El valor de a es';
    $valorb = 'El valor de b es ';
    $valorc = 'El valor de c es ';
    $valord = 'El valor de d es ';
    $valore = 'El valor de e es ';
    $valorf = 'El valor de f es ';
    $espacio = '<br>';
    echo $g;
    var_dump($a);
    echo $espacio;
    echo $valorb;
    var_dump($b);
    echo $espacio;
    echo $valorc;
    var_dump($c);
    echo $espacio;
    echo $valord;
    var_dump($d);
    echo $espacio;
    echo $valore;
    var_dump($e);
    echo $espacio;
    echo $valorf;
    var_dump($f);
    ?>
    </body>
    </html>
   