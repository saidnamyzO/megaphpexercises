<?php
include('configuracion.php');

//PAGINACIÓN
$registros = 1;
$pagina = "";

if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}

if(!$pagina){
	$inicio = 0;
	$pagina = 1;
}else{
	$inicio = ($pagina - 1) *$registros;
}

$resultados = mysql_query("SELECT * FROM contenidos");
$total_registros = mysql_num_rows($resultados);
$total_paginas = ceil($total_registros/$registros);

$consulta = mysql_query("SELECT * FROM contenidos ORDER BY id DESC LIMIT $inicio, $registros");

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

mysql_free_result($resultados);

if($total_registros){
	echo '<div class="numeracion">';
		if(($pagina -1)>0){
			echo '<a href="index.php?pagina='.($pagina -1).'">Anterior -</a>';
		}
		for($i=1; $i<=$total_paginas; $i++){
			if($pagina == $i){
				echo '<span class="destacada">'.$i.'</span>';
			}else{
				echo '<a href="index.php?pagina='.$i.'">'.$i.'</a>';
			}
		}
		if(($pagina + 1)<=$total_paginas){
			echo '<a href="index.php?pagina='.($pagina +1).'">- Siguiente</a>';
		}
	
	echo '</div>';
}

?>
    </main>
    <footer>
    <a href="formulario.php">Acceso Privado</a>
    </footer>
</body>
</div><!-- end .container--->

</html>