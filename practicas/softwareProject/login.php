<?php 
    include("conexion.php");

    if (isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $errores = array();

    if($username == ""){
        array_push($errores, "El campo nombre no puede estar vacío");
    }
    if($password == ""){
        array_push($errores, "El campo contraseña no puede estar vacío");
    }

    $existencia = "SELECT * from regisros WHERE nombre='{$username}' and contraseña='{$password}'";


    if(count($errores)>0){
       echo "<div class='error'>";
        for($i = 0; $i < count($errores); $i++){
            echo "<li>".$errores[$i]."</li>";
        }
    }else{
    setcookie("username",$username,time() + 300);
    setcookie("password",$password,time() + 300);

    header("Location: index.php");
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos2.css">
    <title>Comedor BUAP</title>
</head>
<body>
<form class="form-register" name="formularioLogin" method="post">
    <h4>Login</h4><hr><br>
    <label>Nombre de usuario:</label>
    <input class="control" type="text" name="username" placeholder="Ingresa tu nombre de usuario" >
    <br>
    <br>
    <label>Contraseña:</label>
    <input class="control" type="password" name="password" placeholder="Ingresa tu contraseña">
    <br><br>
    <input class="boton"type="submit" name="login" value="login" class="btn btn-info">
</form>
</body>
</html>