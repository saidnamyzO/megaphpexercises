<?
include("funciones.php");
$resultado = verAutobuses();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ver Autobuses</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
<header>
<h1><img src="images/logo.png" alt="Logo"/></h1>
<h2>Ver Autobuses</h2>
</header>
<p><?= $resultado ?>
</body>
</html>