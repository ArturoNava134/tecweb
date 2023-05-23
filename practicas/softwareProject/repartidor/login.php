<?php if (isset($_POST['login'])){

$usernamedeliver = $_POST['usernamedeliver'];
$passworddeliver = $_POST['passworddeliver'];

setcookie("usernamedeliver",$usernamedeliver,time() + 300);
    setcookie("passworddeliver",$passworddeliver,time() + 300);

    header("Location: aviliableOrders.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos2.css">
    <title>Comedor BUAP</title>
</head>
<body>
<form class="form-register" name="formularioLogin" method="post">
    <label>Nombre de usuario:</label>
    <input  type="text" name="username" placeholder="Ingresa tu nombre de usuario" class="form-control">
    
    <label>Contraseña:</label>
    <input type="password" name="password" placeholder="Ingresa tu contraseña" class="form-control">
   
    <input type="submit" name="login" value="login" class="btn btn-info">
</form>
</body>

</html>