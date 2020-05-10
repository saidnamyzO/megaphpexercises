<?php

include('funciones/menu.php');
include('funciones/consultas.php');

//impedimos el acceso a las personas que NO se han logado

if($_SESSION['nivel']==1){


//asignamos el menú en función de si es NIVEL 1 o NIVEL 2

	$menu = getMenuAdministrador();
	$perfil = 'ADMINISTRADOR';
	$usuarios = getUsuarios();


?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inicio Intranet</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
function confirmar(){
	if(!confirm('¿Seguro que quieres borrar este usuario?')){
		return false;
	}
}
</script>
</head>

<body>
<div class="container">
<header>
<h1>Intranet Megacursos.com</h1>
<h2>Bienvenido a la Intranet, <?= $_SESSION['nombre'] ?></h2>
<div class="cerrar_sesion">
<a href="../login/salir.php">Cerrar sesión</a>
</div><!--end .cerrar_sesion -->
</header>
<?= $menu ?>
<div class="clearfix"></div>
<h2 class="principal">Usuarios Actuales</h2>
	<?= $usuarios ?>
    
<h2 class="principal">Alta Usuarios</h2>
<div class="formulario">
	<form action="funciones/crear_usuarios.php" method="post" id="form_home">
    
    	<label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" />
        
        <label for="apellidos">Apellidos</label>
        <input id="apellidos" name="apellidos" />
        
        <label for="user">Usuario</label>
        <input id="user" name="user" />
        
        <label for="pass">Contraseña</label>
        <input id="pass" name="pass" />
        
        <label for="email">Email</label>
        <input id="email" name="email" />
        
        <label for="telefono">Teléfono</label>
        <input id="telefono" name="telefono" />
        
        <label for="nivel">Nivel</label>
        <input id="nivel" name="nivel" />
        
        <input type="submit" value="Dar de Alta" class="b_inicio"/>
        
    </form>
</div>

</div><!--end .container-->
<footer>
<div class="left">
Teléfono: <strong><a href="tel:<?= $_SESSION['telefono'] ?>"><?= $_SESSION['telefono'] ?></a></strong>
</div><!--end .left-->

<div class="right">
<?= $_SESSION['nombre'] ?>, has entrado con el perfil de <strong><?= $perfil ?></strong>
</div><!--end .right-->
</footer>
</body>
</html>

<?
} else {
	
	define('PAGINA_INICIO','../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
	
}
?>











