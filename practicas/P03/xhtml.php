<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Práctica 3</title>
   </head>
   <body>
   <div>
      <h2>Inciso 1</h2>
      <?php
         $_myvar = 'hola';
         echo '$_myvar es correcta <br /><br />';
         $_7var = 11;
         echo '$_7var es correcta <br /><br />' ;
         //myvar = 3.141516; 
         echo 'myvar es incorrecta <br /><br />';
         $myvar = 'Como estas';
         echo '$myvar es correcta <br /><br />';
         $var7 = 11;
         echo '$var7 es correcta <br /><br />';
         $_element1 = 10;
         echo '$_element1 es correcta <br /><br />';
         //$house*5 = 4; 
         echo '$house*5 es incorrecta <br /><br />';
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
         echo "$a<br />";
         $z[] = "&$a";
         echo "$z<br />";
         $b = "5a version de PHP";
         echo "$b<br />";
         $c = $b*10;
         echo "$c<br />";
         $a .= $b;
         echo "$a .<br />";
         $b *= $c;
         echo "$b *[0]<br />";
         $z[0] = "MySQL";
         echo "$z[0]<br />";
   ?>
   </div>
   <div>
   <h2>Inciso 4</h2>
   <?php
   $a = 'PHP5 <br />';
   echo $GLOBALS["a"];
   $b = '5ta version de php <br />';
   echo $GLOBALS["b"];
   $c = $b*10;
   echo $GLOBALS["c"];

   $a .= $b;
   $b *= $c;

   $z[0] = 'MySQL <br />';
   echo "$z[0]<br />";
   ?>
   </div>
   <div>
   <h2>Inciso 5</h2>
   <?php
   $a = "7 personas";
   $b = (int) $a;
   $a = "9E3";
   $c = (double) $a;

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
   $e = ($a AND $c);
   $f = ($a XOR $b);
   $g = 'El valor de a es';
   $valorb = 'El valor de b es ';
   $valorc = 'El valor de c es ';
   $valord = 'El valor de d es ';
   $valore = 'El valor de e es ';
   $valorf = 'El valor de f es ';
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
   echo "<br />PHP version: " . PHP_VERSION.PHP_EOL;
   echo "<br />OS: " . PHP_OS . PHP_EOL;
   ?>
   </div>
   <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>
  </p>
   </body>
</html>
