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
	$mensaje = 'Se ha pujado correctamente';
	}
	if(isset($_GET['mensaje']) && $_GET['mensaje']=='error'){
	$mensaje = 'La puja debe ser 100€ mayor que la actual';
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

$consulta2 = $sql->enviarQuery("SELECT * FROM pujas WHERE bastidor = '$bastidor' ORDER BY id DESC LIMIT 1");
if($consulta2){
	$precio_actual = $consulta2[0]['precio'];
}else{
	$precio_actual = $precio;
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Subastas. Pujar.</title>
<link href="../estilos.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script>
$(document).ready(function() {

function realizaProceso(){
		var parametros = {
                "bastidor" : "<?php echo $bastidor; ?>"
		};
        $.ajax({
                data:  parametros,
                url:   'precioactual.php',
                type:  'post',
                success:  function (response) {
                        $("#precio_actual").html(response);
                }
        });
		
}
  
  setInterval(realizaProceso,1000);  
});

</script>
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
        <h3>DETALLE VEHÍCULO</h3>
        <p>Aquí puedes pujar por el vehículo</p> 
        </article>
        <article>
        <p class="aviso"><?=$mensaje?></p>
        <article>
        <h3>DETALLE</h3>
        <form action="gestionapuja.php" method="post" class="registro" enctype="multipart/form-data">
        <label for="bastidor">Número de Bastidor</label>
        <input type="text" name="bastidor" id="bastidor" required value="<?= $bastidor ?>" readonly/>
        <input type="hidden" name="id" id="id" value="<?=$id?>"/>
        <label for="matricula">Matrícula</label>
        <input type="text" name="matricula" id="matricula" required value="<?= $matricula ?>"  readonly/>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" required value="<?= $marca ?>"  readonly/>
        <label for="usuario">Modelo</label>
        <input type="text" name="modelo" id="modelo" required value="<?= $modelo ?>"  readonly />
        <label for="precio">Precio Salida</label>
        <input type="text" name="precio" id="precio" required  value="<?= $precio ?>"  readonly/>
        <label for="precio_actual">Precio Actual</label>
        <p id="precio_actual"></p>
        <br/>
        <label for="mipuja">Mi Puja (debe ser +100€ que el Actual)</label>
        <input type="text" name="mipuja" id="mipuja" required />
        <div class="fotografia">
        <img src="<?= $foto ?>" alt=""/>
        </div>
        
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