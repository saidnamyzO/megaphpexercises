<?
include('priv2467/configuracion.php');
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
<title>Mi Empresa</title>
<link href="estilos.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="container">

	<header>
    	<h1>Mi empresa</h1>
        <div class="float-right">
        	<ul>
            	<li><a href="#"><img src="images/redes_sociales/facebook_verde.png" alt="Síguenos en Facebook"/></a></li>
                <li><a href="#"><img src="images/redes_sociales/vimeo_verde.png" alt="Síguenos en Vímeo"/></a></li>
            </ul>
        </div>
    </header>
    
    <section>
    	<article><a href="print.php"><div class="boton1"></div><img src="<?= $foto[1] ?>" alt="Print"/></a></article>
        <article><a href="digital.php"><div class="boton2"></div><img src="<?= $foto[2] ?>" alt="Digital"/></a></article>
        <article><a href="move.php"><div class="boton3"></div><img src="<?= $foto[3] ?>" alt="Move"/></a></article>
    </section>
    
    <div class="clearfloat"></div>
</div>
</body>
</html>