<?
include("funciones.php");
if(isset($_SESSION['nivel']) &&  $_SESSION['nivel'] == '1'){
$menu = menu();
$mensaje = '';
	if(isset($_GET['mensaje']) && $_GET['mensaje']=='ok'){
	$mensaje = 'Se ha cambiado la contraseña correctamente';
	}
	if(isset($_GET['mensaje']) && $_GET['mensaje']=='error'){
	$mensaje = 'La contraseña antigua no es correcta';
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Subastas. Cambiar Login.</title>
<link href="../estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
	<header>
    	<h1><img src="../images/logo.jpg" alt="Web Subastas"/></h1>
        <h2>Zona Privada. Bienvenido, <?=$_SESSION['nombre']?></h2>
    </header>
    <section>
    	<aside class="menu">
        	<nav>
        	<ul>
            	<?=$menu?>
            </ul>
            </nav>
        </aside>
        <div class="derecha">
        <article>
        <h3>CAMBIAR LOGIN</h3>
        <p>Aquí puedes actualizar tu login.</p> 
        </article>
        <article>
        <p class="aviso"><?=$mensaje?></p>
        <form action="cambio_pass.php" method="post">
        <label for="password1">Contraseña Antigua</label>
        <input type="password" name="password1" id="password1" required/>
        <label for="passwor2">Nueva Contraseña</label>
        <input type="password" name="password2" id="password2" required/>
        <input type="submit" value="Enviar">
        </form>
        </article>
       
        </div><!-- end .derecha -->
    </section>
    <div class="clearfix"></div><!-- end clearfix-->
    <footer>
    <p>Copyright Web Subastas. Aviso Legal.</p>
    </footer>
</div><!-- end .container -->
</body>
</html>

<?
}else{
	header('Location:../index.php');
}
?>