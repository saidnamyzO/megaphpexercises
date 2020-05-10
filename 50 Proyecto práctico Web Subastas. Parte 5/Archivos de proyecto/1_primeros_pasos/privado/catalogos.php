<?
include("funciones.php");
include("MySQL.php");
if(isset($_SESSION['nivel']) &&  $_SESSION['nivel'] == '1'){
$sql = new MySQL('localhost','root','','subastas'); 
$consulta = $sql->enviarQuery("SELECT * FROM subasta WHERE id = '1'");
$subasta = $consulta[0]['activa'];
$menu = menu($subasta);

$propietario = $_SESSION['nif'];
$mensaje = '';
	if(isset($_GET['mensaje']) && $_GET['mensaje']=='ok'){
	$mensaje = 'Se ha borrado el vehículo';
	}
	if(isset($_GET['mensaje']) && $_GET['mensaje']=='error'){
	$mensaje = 'No se ha podido borrar el vehículo';
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Subastas. Subasta en Curso.</title>
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
        <div class="derecha_privado">
        <article>
        <h3>CATALÓGO DE VEHÍCULOS</h3>
        <p>Aquí puedes pujar por los vehículos.</p> 
        </article>
        <article>
        <p><?= $mensaje ?></p>
        <table>
        	<tr>
            	<th>Foto</th><th>Marca</th><th>Modelo</th><th>Propietario</th><th>Precio</th><th></th>
                <?
				$consulta = $sql->enviarQuery("SELECT * FROM vehiculos ORDER BY id");
				if($consulta){
				echo '<tr>';
				echo '<td><img src="'.$foto = $consulta[0]['url'].'" alt="Foto" width="150" /></td>';
				echo '<td>'.$marca = $consulta[0]['marca'].'</td>';
				echo '<td>'.$modelo = $consulta[0]['modelo'].'</td>';
				echo '<td>'.$modelo = $consulta[0]['propietario'].'</td>';
				echo '<td>'.$precio = $foto = $consulta[0]['precio'].'</td>';
				echo '<td><a href="ficha_vehiculo.php?id='.$id = $consulta[0]['id'].'">Ver Detalle</a></td>';
				echo '</tr>';
				
				}else{
					echo '<p>Todavía no ha dado de alta ningún vehículo.</p>';
				}
				?>
            </tr>
        </table>
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