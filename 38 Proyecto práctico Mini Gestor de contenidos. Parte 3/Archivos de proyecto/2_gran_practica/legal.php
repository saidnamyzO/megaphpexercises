<?
include('priv2467/configuracion.php');

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mi Empresa. Legal.</title>
<link href="estilos.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="container">

	<header>
    	<h1>Legal</h1>
        <div class="float-right">
        	<ul>
            	<li><a href="#"><img src="images/redes_sociales/facebook_verde.png" alt="Síguenos en Facebook"/></a></li>
                <li><a href="#"><img src="images/redes_sociales/vimeo_verde.png" alt="Síguenos en Vímeo"/></a></li>
            </ul>
        </div>
    </header>
     <nav>
    	<ul>
        	<li>
            	<a href="index.php">Inicio</a>
            </li>
            <li>
            	<a href="legal.php" class="active">Legal</a>
            </li>
        </ul>
    </nav>
   <div class="clearfloat"></div>
    <section>
    
    <div class="texto">
    
    <?
		$resultado = mysql_query("SELECT parrafo FROM aviso_legal ORDER BY id");
		while ($row = mysql_fetch_array($resultado)){
			$parrafo = $row['parrafo'];
			echo '<p>'.$parrafo.'</p>';
		}
	?>
      	
    <!-- final texto --></div>
    </section>
    
    <div class="clearfloat"></div>
</div>
</body>
</html>