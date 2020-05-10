<?
include("funciones.php");
$menu = menu(1);

//Gestión errores de validación
$error_login='';
if(isset($_GET['error']) && $_GET['error']=='1'){
	$error_login = 'No se ha podido iniciar la sesión';
}
if(isset($_GET['error']) && $_GET['error']=='2'){
	$error_login = 'No puedes acceder a esta parte';
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inicio App Autobuses</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
<header>
<h1><img src="images/logo.png" alt="Logo"/></h1>
<h2>Inicio</h2>
<?
if(isset($_SESSION['permiso'])){
?>
<a href="funciones.php?salir=true" class="cerrar">Cerrar Sesión</a>
<?
}
?>
</header>
<nav>
	<ul>
    	<?
		if(isset($_SESSION['permiso']) && $_SESSION['permiso']=='1'){
		 echo $menu;
		}
		?>
    </ul>
</nav>


<form method="post" action="funciones.php">
	<label for="Usuario">Usuario</label><div class="error"><?= $error_login ?></div>
    <input type="text" name="Usuario" id="Usuario" required/>
    
    <label for="Password">Contraseña</label>
    <input type="password" name="Password" id="Password" required/>
    
   
    <input type="submit" value="Entrar" name="login"/>
    <div class="clearfix"></div>
</form>



<article id="autobus">
	<img src="images/autobus.png" alt="Autobus"/>
</article>

</body>
</html>






