<?php

	$titulo = "";
	if(isset($_GET['titulo'])){
		$titulo = "Se ha publicado correctamente su artículo con el título: <strong>'".$_GET['titulo']."'</strong>";
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Gestor de Contenidos</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>
<body>
<div class="container">
<h1>Formulario para añadir contenido al blog</h1>

<div class="formulario">
<form action="insercion_contenidos.php" method="post" enctype="multipart/form-data" id="form_home">
	
    <label for="titulo">Título</label>
    <input type="text" id="titulo" name="titulo">
    
    <label for="comentario">Comentario</label>
    <textarea id="comentario" name="comentario"></textarea>
    
    <p>Elija una foto de tamaño inferior a 2MB.</p>
    <input type="file" name="foto" id="foto" class="enviar">
    <br/>
    <input type="submit" name="ok" value="Enviar" class="b_inicio">
    
</form>
</div>

	<div class="boton">
	<a href="ver_blog.php">Ver Blog</a>
    </div>
    
    </div><!--container-->
    <div class="mensaje"><?= $titulo ?></div>
</body>
</html>