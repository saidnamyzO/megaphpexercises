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
 
$id = $_GET['id'];
$consulta = $sql->enviarQuery("SELECT * FROM vehiculos WHERE id = '$id'");

if($consulta){
	$bastidor = $consulta[0]['bastidor'];
	$matricula = $consulta[0]['matricula'];
	$marca = $consulta[0]['marca'];
	$modelo = $consulta[0]['modelo'];
	$foto = $consulta[0]['url'];
	$precio = $consulta[0]['precio'];
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
        <h3>EDITAR VEHÍCULO</h3>
        <p>Aquí puedes editar tus vehículos</p> 
        </article>
        <article>
        <p class="aviso"><?=$mensaje?></p>
        <article>
        <h3>EDITAR</h3>
        <form action="procesa_editar_vehiculos.php?id=<?=$id?>" method="post" class="registro" enctype="multipart/form-data">
        <label for="bastidor">Número de Bastidor</label>
        <input type="text" name="bastidor" id="bastidor" required value="<?= $bastidor ?>"/>
        <label for="matricula">Matrícula</label>
        <input type="text" name="matricula" id="matricula" required value="<?= $matricula ?>"/>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" required value="<?= $marca ?>"/>
        <label for="usuario">Modelo</label>
        <input type="text" name="modelo" id="modelo" required value="<?= $modelo ?>" />
        <label for="precio">Precio Salida</label>
        <input type="text" name="precio" id="precio" required  value="<?= $precio ?>"/>
        <div class="fotografia">
        <img src="<?= $foto ?>" alt=""/>
        </div>
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