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
	$mensaje = 'Se ha dado de alta el vehículo';
	}
	if(isset($_GET['mensaje']) && $_GET['mensaje']=='error'){
	$mensaje = 'No se ha podido dar de alta el vehiculo';
	}


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Subastas. Alta Vehículos.</title>
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
        <h3>ALTA VEHÍCULOS</h3>
        <p>Aquí puedes dar de alta los vehículos</p> 
        </article>
        <article>
        <p class="aviso"><?=$mensaje?></p>
        <article>
        <h3>FORMULARIO DE NUEVO VEHÍCULO</h3>
        <form action="procesa_altas.php" method="post" class="registro" enctype="multipart/form-data">
        <label for="bastidor">Número de Bastidor</label>
        <input type="text" name="bastidor" id="bastidor" required/>
        <label for="matricula">Matrícula</label>
        <input type="text" name="matricula" id="matricula" required/>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" required/>
        <label for="usuario">Modelo</label>
        <input type="text" name="modelo" id="modelo" required />
        <label for="precio">Precio Salida</label>
        <input type="text" name="precio" id="precio" required />
         <label for="foto">Fotografía</label>
        <input type="file" name="foto" id="foto"/>
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