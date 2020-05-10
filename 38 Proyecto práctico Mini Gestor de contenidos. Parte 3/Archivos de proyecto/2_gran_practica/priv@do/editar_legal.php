<?
include('../priv2467/configuracion.php');
cache();

if($_SESSION['level']=='1'){
	
	$resultados = mysql_query("SELECT * FROM aviso_legal");


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
    
    <article>
    <h2>Editar Legal</h2>
    
    <form action="procesa_legal.php" method="post" enctype="multipart/form-data" class="avisolegal">
    
    <?
	$number = 1;
	$palabra = 'texto';
	while ($row = mysql_fetch_array($resultados)){
		$parrafo = $row['parrafo'];
		?>
	<label for="<?=$palabra.$number?>">Párrafo <?=$number?></label>
    <textarea name="<?=$palabra.$number?>" id="<?=$palabra.$number?>" cols="70" rows="5">
    <?
	echo $parrafo;
	?>
    </textarea>
	<?	
	$number++;
	}
	?>
    
    <label for="nuevo_parrafo">Nuevo párrafo</label>
    <textarea name="nuevo_parrafo" cols="70" rows="5"></textarea>
    
    <input type="submit" value="Enviar"/>
    
    
    </form>
    
    </article>
    
        <div class="clearfloat"></div>
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