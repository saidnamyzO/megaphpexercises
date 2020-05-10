<?
include("funciones.php");
include("MySQL.php");
if(isset($_SESSION['nivel']) &&  $_SESSION['nivel'] == '1'){
$sql = new MySQL('localhost','root','','subastas'); 
$consulta = $sql->enviarQuery("SELECT * FROM subasta WHERE id = '1'");
$subasta = $consulta[0]['activa'];
$menu = menu($subasta);
$mensaje = '';
	if(isset($_GET['mensaje']) && $_GET['mensaje']=='ok'){
	$mensaje = 'Se han editado los datos correctamente';
	}
	if(isset($_GET['mensaje']) && $_GET['mensaje']=='error'){
	$mensaje = 'No se han podido editar los datos';
	}
$id = $_SESSION['id'];
$consulta = $sql->enviarQuery("SELECT * FROM usuarios WHERE id='$id'");

//Recuperamos los datos
$nombre = $consulta[0]['nombre'];
$nif = $consulta[0]['NIF'];
$user = $consulta[0]['user'];
$password = $consulta[0]['password'];
$email = $consulta[0]['email'];

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Subastas. Editar.</title>
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
        <h3>EDITAR DATOS</h3>
        <p>Aquí puedes editar tus datos personales.</p> 
        </article>
        <article>
        <p class="aviso"><?=$mensaje?></p>
        <article>
        <h3>FORMULARIO DE REGISTRO</h3>
        <form action="edit_registro.php" method="post" class="registro">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required value="<?= $nombre ?>"/>
        <label for="nif">NIF</label>
        <input type="text" name="nif" id="nif" required value="<?= $nif ?>"/>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required value="<?= $email ?>"/>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" required value="<?= $user ?>"/>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required value="<?= $password ?>"/>
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