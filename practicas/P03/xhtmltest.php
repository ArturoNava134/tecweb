<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Práctica 2</title>
  </head>
  <body>
    <div>
      <h2>Inciso 1</h2>
      <?php
        $_myvar = 'hola';
        echo '$_myvar es correcta inicia con guion bajo <br /><br />';
        $_7var = 11;
        echo '$_7var es correcta inicia con guion bajo <br /><br />';
        // myvar = 3.141516;
        echo 'myvar es incorrecta no lleva el signo de $ por lo tanto no es variable <br /><br />';
        $myvar = 'Como estas';
        echo '$myvar es correcta <br /><br />';
        $var7 = 11;
        echo '$var7 es correcta <br /><br />';
        $_element1 = 10;
        echo '$_element1 es correcta inicia con guion bajo <br /><br />';
        // $house*5 = 4;
        echo '$house*5 es incorrecta no se puede usar * en una variable <br /><br />';
      ?>
    </div>
    <div>
      <h2>Inciso 2</h2>
      <?php
        $a = "ManejadorSQL";
        echo "$a<br />";
        $b = 'MySQL';
        echo "$b<br />";
        $c = &$a;
        echo "$c<br />";
        $a = "PHP server";
        echo "$a<br />";
        $b = &$a;
        echo "$b<br />";
      ?>
    </div>
    <div>
      <h2>Inciso 3</h2>
      <?php
        $a = "PHP5";
        echo "$a<br /><br />";
        $z []="&amp;$a";
        echo "$z[0]<br /><br />";
        $b = "5a version de php";
        echo "$b<br /><br />";
        $c = $b*10;
        echo "$c<br /><br />";
        $a .= $b;
        echo "$a <br /><br />";
        $b *= $c;
        echo "$b <br /><br />";
        $z[0]="MYSQL";
        echo "$z[0]<br /><br />";
      ?>
    </div>
    <div>
      <h2>Inciso 4</h2>
      <?php
        $a = 'PHP5 <br />';
        echo $a;
        $b = '5ta version de php <br />';
        echo $b;
        $c = $b*10;
        echo $c;
        $a .= $b;
        echo $a;
        $b *= $c;
        echo $b;
        $z[0] = 'MySQL <br />';
        echo $z[0];
      ?>
    </div>
   <div>
  <h2>Inciso 5</h2>
  <?php
    $a = "7 personas";
    $b = (int) $a;
    $a = "9E3";
    $c = (float) $a;

    echo "$a<br />";
    echo "$b<br />";
    echo "$c<br />";
  ?>
</div>
<div>
  <h2>Inciso 6</h2>
  <?php
    $a = '0';
    $b = 'TRUE';
    $c = FALSE;
    $d = ($a || $b);
    $e = ($a && $c);
    $f = ($a xor $b);
    $g = 'a = ';
    $valorb = 'b = ';
    $valorc = 'c = ';
    $valord = 'd = ';
    $valore = 'e = ';
    $valorf = 'f = ';
    $espacio = '<br />';
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
</div>
<div>
  <h2>Inciso 7</h2>
  <?php
    echo "Apache version: " . $_SERVER['SERVER_SOFTWARE'] . PHP_EOL;
    echo "<br />PHP version: " . PHP_VERSION . PHP_EOL;
    echo "<br />OS: " . PHP_OS . PHP_EOL;
  ?>
</div>
        </body>
        </html>