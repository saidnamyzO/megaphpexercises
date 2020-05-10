<?
include('../priv2467/configuracion.php');
cache();

if($_SESSION['level']=='1'){
	
	$resultados =  mysql_query("SELECT enlace_foto FROM home ORDER BY id") or die("Error: " . mysql_error());
$number = 1;
while ($row = mysql_fetch_array($resultados)){
	$foto[$number] = $row['enlace_foto'];
	$number++;
}

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
    
    <section>
    
    <p class="error"><strong>Tamaño de fotos: 214 píxeles de ancho x 413 píxeles de alto</strong></p>
    
    <aside>
    	<nav class="privado">
        	<ul>
            	<li><a href="index3.php">Editar Inicio</a></li>
                <li><a href="#">Editar Clientes</a></li>
                <li><a href="#">Editar Contacto</a></li>
                <li><a href="editar_legal.php">Editar Legal</a></li>
                <li><a href="#">Editar Move</a></li>
                <li><a href="#">Editar Print</a></li>
                <li><a href="#">Editar Digital</a></li>
            </ul>
        </nav>
    </aside>
    
    <form action="procesa_index.php" method="post" enctype="multipart/form-data">
    <article class="principal">
    
    <div class="foto_portada">
    <img src="../<?= $foto[1] ?>" alt="Foto 1"/>
    <label for="foto1">
    Cambiar Print
    </label>
    <input type="file" name="foto1" id="foto1" value=""/>
    </div>
    <div class="foto_portada">
    <img src="../<?= $foto[2] ?>" alt="Foto 2"/>
    <label for="foto2">
    Cambiar Digital
    </label>
    <input type="file" name="foto2" id="foto2" value=""/>
    </div>
    <div class="foto_portada">
    <img src="../<?= $foto[3] ?>" alt="Foto 3"/>
    <label for="foto3">
    Cambiar Move
    </label>
    <input type="file" name="foto3" id="foto3" value=""/>
    </div>
    <input type="submit" value="Enviar" />
    </form>
    </article>
    
        
    </section>
    
	
    <div class="clearfloat"></div>
 </div>
</body>
</html>

<?
}else{
	header('Location:../index.php');
}

?>