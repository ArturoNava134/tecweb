<?php
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];


    setcookie('username', false);

// setcookie("username", "", time() - 360, "/");
// setcookie("password", "", time() - 360, "/");



header("Location: http://localhost:8080/tecnologiasweb/practicas/softwareProject/index.php");

?>