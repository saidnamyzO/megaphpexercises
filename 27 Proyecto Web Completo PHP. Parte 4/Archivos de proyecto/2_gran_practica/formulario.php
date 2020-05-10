<?

$error='';
if(isset($_GET['error']) && $_GET['error']=='nombre'){
	$error = 'Debe escribir su nombre';
}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulario Prueba</title>
</head>

<body>
<form method="post" action="control_validacion.php">

Nombre<input type="text"  name="nombre"/>
<br/>
<input type="submit" value="Enviar"/><?= $error ?>

</form>
</body>
</html>
