<?php

session_start();
echo "<h1>Bienvenido a la PAGINA PRINCIPAL, ".$_SESSION['nombre']."</h1>";

if($_SESSION['nivel']=='1'){
	echo "<p>Tienes los permisos de acceso del administrador</p>";
}else{
	echo "<p>Eres un simple pringao</p>";
}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Acceso Privado</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="intranet.js"></script>
</head>

<body>
<div id="form_home">
	<a href="../login/salir.php">Cerrar sesión</a>
</div>

</body>
</html>











