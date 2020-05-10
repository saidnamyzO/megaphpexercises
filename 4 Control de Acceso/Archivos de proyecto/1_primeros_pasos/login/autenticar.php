<?php

$usuario = $_POST['p_username'];
$usuario = addslashes($usuario);
$usuario = strip_tags($usuario);

$contrasena = $_POST['p_password'];
$contrasena = addslashes($contrasena);
$contrasena = strip_tags($contrasena);

echo "Usuario: ".$usuario;
echo "<br/>";
echo "Password: ".$contrasena;

?>