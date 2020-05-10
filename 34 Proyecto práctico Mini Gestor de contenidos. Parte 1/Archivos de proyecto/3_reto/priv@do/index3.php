<?
include('../priv2467/configuracion.php');

if($_SESSION['level']=='1'){

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inicio Acceso Privado</title>
<link href="../estilos.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="container">

	<header>
    	<h1>Área Privada. Bienvenido, <?= $_SESSION['nombre']?></h1>
    </header>
    
	
    
 </div>
</body>
</html>

<?
}else{
	header('Location:../index.php');
}

?>