<?
session_start();
$mensaje_error='';
if(isset($_GET['error']) && $_GET['error']=='1'){
	$mensaje_error='El usuario o la contraseña son incorrectos';
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sistema de Sesiones</title>
<style>
p{
	color:red;
}
</style>
</head>

<body>
<p><?= $mensaje_error ?></p>
<form name="login" method="post" action="control.php">
Usuario: <input type="text" size="10" name="user">
<br/>
Clave: <input type="text" size="10" name="pass">
<br/>
<input type="submit" name="submit" value="Login"/>
</form>
</body>
</html>