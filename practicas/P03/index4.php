<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
<html>
<head>
    <title>Práctica 3</title>
</head>
<body>
    <h2>Inciso 4</h2>
    <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
    la matriz $GLOBALS o del modificador global de PHP.</p>
    <?php
    $a = 'PHP5 <br>';
    echo $GLOBALS["a"];
    $b = '5ta version de php <br>';
    echo $GLOBALS["b"];
    $c = $b*10;
    echo $GLOBALS["c"];
    
    $a .= $b;
    $b *= $c;
    
    $z[0] = 'MySQL <br>';
    echo "$z[0]<br>";
    ?>
    </body>
    </html>
   