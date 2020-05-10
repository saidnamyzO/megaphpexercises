<?
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sistema de Sesiones</title>
</head>

<body>
<form name="login" method="post" action="control.php">
Usuario: <input type="text" size="10" name="user">
<br/>
Clave: <input type="text" size="10" name="pass">
<br/>
<input type="submit" name="submit" value="Login"/>
</form>
</body>
</html>