<?php

//Funciones para la doble validación

function validateUsername($name){
	//No si cumple la longitud mínima
	if(strlen($name) < 4){
		return false;
	}
	//Si tiene la longitud correcta pero no solo son caracteres desde la A-z
	else if(!preg_match("/^[a-zA-Z]+$/",$name)){
		return false;
	}
	//Si está todo correcto
	else{
		return true;
	}
}

function validatePassword1($password1){
	//Si no tiene entre 5 y 12 caracteres
	if(strlen($password1) < 5 || strlen($password1) > 12){
	
		return false;
	}
	//Si tiene la longitud correcta pero no son los caracteres adecuados
	else if(!preg_match("/^[0-9a-zA-Z]+$/",$password1)){
		return false;
	}
	//Si está todo correcto
	else{
		return true;
	}
}

function validatePassword2($password1,$password2){
	//No coinciden
	if($password1 != $password2){
		return false;
	}else{
		return true;
	}
}

function validateEmail($email){
	
	
	//Si no hay nada escrito
	if(strlen($email) == 0){
		return false;
	}
	//Si hay algo escrito pero no son los caracteres adecuados
	else if(!filter_var($_POST['email'],FILTER_SANITIZE_EMAIL)){
		return false;
	}
	//Si está todo correcto
	else{
		return true;
	}
}

//Validación de datos enviados

if (isset($_POST['username'])) {
$username = $_POST['username'];
} else {
$username = "";
}
$usernameValue = "";

if (isset($_POST['password1'])) {
$password1 = $_POST['password1'];
} else {
$password1 = "";
}
$userPassword1 = "";

if (isset($_POST['password2'])) {
$password2 = $_POST['password2'];
} else {
$password2 = "";
}

if (isset($_POST['email'])) {
$email = $_POST['email'];
} else {
$email = "";
}

if (isset($_GET['mensaje'])) {
	$ok = "El mensaje se ha enviado con éxito";
}else{
	$ok= "";
}

$emailValue = "";


if(isset($_POST['send'])){
	if(!validateUsername($username)){
		$username = "error";
	}
	if(!validatePassword1($password1)){
		$password1 = "error";
	}
	if(!validatePassword2($password1,$password2)){
		$password2 = "error";
	}
	if(!validateEmail($email)){
		$email = "error";
	}
	
	//Guardamos los valores para que no tenga que reescribirlos
	$usernameValue = $_POST['username'];
	$emailValue = $_POST['email'];
	$userPassword1 = $_POST['password1'];
	
	//Comprobamos que todo ha ido bien
	if($username != "error" && $password1 != "error" && $password2 != "error" && $email != "error"){
		Header("Location: enviar.php?username='$username'&password='$password1'&email='$email'");
	}
}

	


?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Doble validación</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="formulario.js"></script>
<link rel="stylesheet" type="text/css" href="formulario.css" />
</head>

<body>
<div class="wrapper">
	<div class="section">
    <h1>Formulario de contacto</h1>
    <h2>Doble validación</h2>
    	<form id="form1" action="formulario.php" method="post">
        	<label for="username">Nombre de usuario (<span id="req-username" class="requisites <?= $username ?>">A-z, mínimo 4 caracteres</span>):</label>
            <input tabindex="1" name="username" id="username" type="text" class="text" value="<?= $usernameValue ?>"/>
            
            <label for="password1">Contraseña (<span id="req-password1" class="requisites <?= $password1 ?>" >Mínimo 5 caracteres, máximo 12 caracteres, letras y números</span>):</label>
            <input tabindex="2" name="password1" id="password1" type="password" class="text" value="<?= $userPassword1 ?>"/>
            
            <label for="password2">Repetir Contraseña (<span id="req-password2" class="requisites <?= $password2 ?>" >Debe ser igual a la anterior</span>):</label>
            <input  tabindex="3" name="password2" id="password2" type="password" class="text" value=""/>
            
            <label for="email">Email(<span id="req-email" class="requisites <?= $email ?>">Escriba un email válido, por favor</span>):</label>
            <input tabindex="4" name="email" id="email" type="text" class="text" value="<?= $emailValue ?>"/>
            <div>
            	<input tabindex="6" name="send" id="send" type="submit"
 class="submit" value="Enviar formulario"/>
             </div>
            
            </form>
            <p class="rojo"><?= $ok ?></p>
 
    </div><!-- end .section -->
</div><!-- end .wrapper -->
</body>
</html>

