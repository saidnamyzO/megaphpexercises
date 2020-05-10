<?
include("funciones.php");
$menu = menu(4);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Alta Conductores</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
<header>
<h1><img src="images/logo.png" alt="Logo"/></h1>
<h2>Alta Conductores</h2>
</header>
<nav>
	<ul>
    	<?= $menu ?>
    </ul>
</nav>


<form method="post" action="funciones.php">
	<label for="nombre">Nombre</label><div class="error"></div>
    <input type="text" name="nombre" id="nombre" required/>
    
    <label for="fnacimiento">Fecha de Nacimiento</label><div class="error"></div>
    <input type="text" name="fnacimiento" id="fnacimiento" required/>
    
    <label for="nif">NIF</label> <div class="error"></div>
    <input type="text" name="nif" id="nif" required/>
    
    <label for="telefono">Teléfono</label> <div class="error"></div>
    <input type="text" name="telefono" id="telefono" required/>
    
    <label for="email">Email</label> <div class="error"></div>
    <input type="text" name="email" id="email" required/>
    
    <label for="carnet">Carnet</label> <div class="error"></div>
    <input type="text" name="carnet" id="carnet" required/>
   
    <input type="submit" value="Dar de Alta" name="altaconductor"/>
    <div class="clearfix"></div>
</form>





</body>
</html>






