<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inserción Contenidos</title>
</head>
<body>

<?php

//Llamar al archivo de conexión con la base de datos
include('configuracion.php');

$titulo = htmlentities(addslashes($_POST['titulo']), ENT_QUOTES);
$cometario = htmlentities(addslashes($_POST['titulo']), ENT_QUOTES);
$fecha = date("Y-m-d H:i:s");

//Gestionamos la foto
if((isset($_FILES['foto']['name'])&&($_FILES['foto']['error']==UPLOAD_ERR_OK))){
	$ruta_destino = 'fotos/';
	//desplazamos la foto del archivo temporal a la ruta de destino
	move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_destino.$_FILES['foto']['name']);	
}

$url_foto = $ruta_destino.$_FILES['foto']['name'];

$consulta = "INSERT INTO contenidos (Titulo, Fecha, Comentario, Imagen) VALUES ('$titulo','$fecha','$cometario','$url_foto')";

$resultado = mysql_query($consulta);


define("PAGINA_INICIO","formulario.php?titulo='$titulo'");
header("Location: ".PAGINA_INICIO);	

?>

</body>
</html>










