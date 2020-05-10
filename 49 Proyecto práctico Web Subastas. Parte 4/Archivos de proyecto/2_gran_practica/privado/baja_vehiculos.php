<?
include("funciones.php");
include("MySQL.php");
if(isset($_SESSION['nivel']) &&  $_SESSION['nivel'] == '1'){
$menu = menu();

$propietario = $_SESSION['nif'];

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Subastas. Baja Vehículos.</title>
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
        <h3>BAJA VEHÍCULOS</h3>
        <p>Aquí podrás editar los vehículos que son tuyos.</p> 
        </article>
        <article>
        <table>
        	<tr>
            	<th>Foto</th><th>Marca</th><th>Modelo</th><th>Precio</th><th></th><th></th>
                <?
				$sql = new MySQL('localhost','root','','subastas'); 
				$consulta = $sql->enviarQuery("SELECT * FROM vehiculos WHERE propietario = '$propietario' ORDER BY id");
				if($consulta){
				echo '<tr>';
				echo '<td><img src="'.$foto = $consulta[0]['url'].'" alt="Foto" width="150" /></td>';
				echo '<td>'.$marca = $consulta[0]['marca'].'</td>';
				echo '<td>'.$modelo = $consulta[0]['modelo'].'</td>';
				echo '<td>'.$precio = $foto = $consulta[0]['precio'].'</td>';
				echo '<td><a href="editar_vehiculos.php?id='.$id = $consulta[0]['id'].'">Editar Vehículo</a></td>';
				echo '<td><a href="quitar_vehiculo.php?id='.$id = $consulta[0]['id'].'">Borrar Vehículo</a></td>';
				echo '</tr>';
				
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