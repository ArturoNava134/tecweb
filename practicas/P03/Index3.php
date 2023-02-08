<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
<html>
<head>
    <title>Práctica 3</title>
</head>
<body>
    <h2>Inciso 3</h2>
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
verificar la evolución del tipo de estas variables (imprime todos los componentes de los
arreglo):</p>
<?php
       $a = "PHP5";
       echo "$a<br>";
       $z[] = "&$a";
       echo "$z<br>";
       $b = "5a version de PHP";
       echo "$b<br>";
       $c = $b*10;
       echo "$c<br>";
       $a .= $b;
       echo "$a .<br>";
       $b *= $c;
       echo "$b *[0]<br>";
       $z[0] = "MySQL";
       echo "$z[0]<br>";
    ?>
    </body> 
    </html>