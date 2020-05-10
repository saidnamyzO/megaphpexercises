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
$cometario = htmlentities(addslashes($_POST['comentario']), ENT_QUOTES);
$fecha = date("Y-m-d H:i:s");

//Gestionamos la foto
if($_FILES['foto']['error']){
	switch($_FILES['foto']['error']){
		case 1: //UPLOAD_ERR_INI_SIZE
		echo "El tamaño del archivo es más grande que el límite permitido";
		break;
		case 2: //UPLOAD_ERR_FORM_SIZE
		echo "El tamaño del archivo es más grande que el límite permitido por nosotros";
		break;
		case 3: //UPLOAD_ERR_PARTIAL
		echo "El envío del archivo se ha interrumpido durante la transferencia.";
		break;
		case 4: //UPLOAD_ERR_NO_FILE
		echo "El tamaño del archivo que ha enviado es nulo.";
		break;
	}
	
}

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










