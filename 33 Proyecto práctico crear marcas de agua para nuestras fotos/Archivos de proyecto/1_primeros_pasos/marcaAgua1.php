<?
	//Cargamos la imagen de forma dinámica
	//$im = imagecreatefromjpeg('mariposa.jpg');
	
	//Creamos el contenedor de la imagen con la librería GD
	$estampa = imagecreatetruecolor(100, 70);
	imagefilledrectangle($estampa, 0, 0, 99, 69, 0x0000FF);
	imagefilledrectangle($estampa, 9, 9, 90, 60, 0xFFFFFF);
	$im = imagecreatefromjpeg('mariposa.jpg'); 
	imagestring($estampa, 5, 20, 20, 'Moises',  0x0000FF);
	imagestring($estampa, 3, 20, 40, '(c) 2016',  0x0000FF);
	
	//Establecemos los márgenes para la estampa y obtenemos el alto y el ancho de la imagen de la estampa
	
	$margen_dcho = 10;
	$margen_inf = 10;
	$sx = imagesx($estampa);
	$sy = imagesy($estampa);
	
	//Juntamos la marca de agua o estampa con la foto, a una opacidad del 50%;
	
	imagecopymerge($im, $estampa, imagesx($im) - $sx - $margen_dcho, imagesy($im) - $sy - $margen_inf, 0, 0, imagesx($estampa), imagesy($estampa), 50);
	
	//Guardamos la imagen en un archivo y liberamos la memoria
	imagepng($im, 'mariposa.png');
	imagedestroy($im);
	
	$foto = 'mariposa.png';
	
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Marca de Agua</title>
<style>
*{
	margin:0;
	padding:0;
}
body{
	background:rgba(241,209,153,1.00);
}
section{
	width:800px;
	margin:50px auto;
	
}
section img{
	width:100%;
	border:5px solid #000;
}
</style>
</head>

<body>
<section>
<img src="<?= $foto ?>" alt="Mariposa"/>
</section>
</body>
</html>