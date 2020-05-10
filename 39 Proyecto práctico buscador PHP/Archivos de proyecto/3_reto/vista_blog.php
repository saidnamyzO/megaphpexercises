<?php
require_once("BuscadorClass.php");
$conexion = new Conectar();
$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = '$id'";
$res = mysql_query($query,$conexion->con());
while($reg=mysql_fetch_assoc($res)){
	$titulo = $reg['titulo'];
	$autor = $reg['autor'];
	$fecha = $reg['fecha'];
	$cuerpo = $reg['cuerpo'];
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
<style>
*{
	margin:0;
	padding:0;
}
body{
	background:rgba(240,227,153,1.00);
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
section{
	width:60%;
	max-width:800px;
	margin:100px auto;
	border:3px solid orange;
	background:#fff;
	padding:1.5em;
	box-sizing:border-box;
}
h1{
	font-size:2.5em;
	font-weight:normal;
	color:rgba(104,104,104,1.00);
	text-align:center;
	margin:1em 0 0em 0;
}

h2{
	font-size:1.5em;
	text-align:center;
	font-weight:lighter;
	color:rgba(104,104,104,1.00);
	margin:0 0 1em 0;
}

h2 span{
	font-size:1em;
	color:orange;
}
article{
	margin-top:1em;
	font-size:1em;
	color:rgba(104,104,104,1.00);
	line-height:1.3em;
}

</style>
</head>

<body>
<section>
<h1><?=$titulo?></h1>
<h2><?=$autor?> | <span><?=$fecha?></span></h2>
<article>
<?=$cuerpo?>
</article>
</section>
</body>
</html>