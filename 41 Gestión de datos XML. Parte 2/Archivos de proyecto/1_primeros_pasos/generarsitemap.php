<?
function con(){
	$conexion = mysql_connect('localhost','root','');
	mysql_select_db('blog');
	return $conexion;
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Creación de sitemaps para el blog</title>
</head>

<body>
<h1>Sitemaps</h1>
<h2>Estamos generando un archivo .xml para el sitemap</h2>
<?
$ssql="SELECT * FROM posts";

//Crear la cabecera del .xml
$xml = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">';

$rs = mysql_query($ssql,con());
$total = mysql_num_rows($rs);
while($fila=mysql_fetch_object($rs)){
	$xml .= '<url><br/>';
	$xml .= '<titulo>'.$fila->titulo.'</titulo><br/>';
	$xml .= '<loc>'.$fila->url.'</loc><br/>';
	$xml .= '<lastmode>'.$fila->fecha.'</lastmode><br/>';
	$xml .= '<changefreq>monthly</changefreq><br/>';
	$xml .= '<priority>0.8</priority><br/>';
	$xml .= '</url><br/>';
}
$xml .= '</urlset><br/><br/>';

echo $xml;

?>
</body>
</html>







