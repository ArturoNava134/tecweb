
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
<html>
<head>
    <title>Práctica 3</title>
</head>
<body>
    <h2>Inciso 7</h2>
    <p>Usando la variable predefinida $_SERVER, determina lo siguiente:</p>
    <?php
    echo "Apache version: " . $_SERVER['SERVER_SOFTWARE'] . PHP_EOL;
    echo "<br>PHP version: " . PHP_VERSION.PHP_EOL;
    echo "<br>OS: " . PHP_OS . PHP_EOL;
    ?>
    </body>
    </html>
   