<?php
include('configuracion.php');

if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){
	
	if((isset($_FILES['photo']['name'])&&($_FILES['photo']['error']==UPLOAD_ERR_OK))){
		
		
		
		
		$nombre = $_SESSION['id'].'.jpg';
		$ruta_destino = '../uploads/'.$nombre;
		
		move_uploaded_file($_FILES['photo']['tmp_name'], $ruta_destino);
		
	}
	
	define('PAGINA_INICIO','../index.php');
	header('Location: '.PAGINA_INICIO);


	
}else {
	
	define('PAGINA_INICIO','../../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
}

?>











