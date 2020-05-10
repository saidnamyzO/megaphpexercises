<?php
include('configuracion.php');

$consulta = mysql_query("SELECT * FROM contenidos");

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mi Blog</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
	<div class="container">
	<h1>Mi Blog</h1>
    <hr class="linea"/>
    
    <main>
<? 
while($linea = mysql_fetch_array($consulta)){
	$contenido= "<article>";
	$contenido.= "<h2>".$linea['Titulo']."</h2>";
	$contenido.= "<span>".$linea['Fecha']."</span>";
	$contenido.= "<p>".$linea['Comentario']."</p>";
	$contenido.= "<img src='".$linea['Imagen']."' alt='".$linea['Titulo']."'></img>";
	$contenido.= "</article>";
	echo $contenido;
}

?>
    </main>
    
</body>
</div><!-- end .container--->

</html>