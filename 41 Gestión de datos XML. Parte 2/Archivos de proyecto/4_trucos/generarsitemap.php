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
	$xml .= '
	<url>
		<titulo>'.$fila->titulo.'</titulo>
		<loc>'.$fila->url.'</loc>
		<autor>'.$fila->autor.'</autor>
		<lastmode>'.$fila->fecha.'</lastmode>
		<changefreq>monthly</changefreq>
		<priority>0.8</priority>
	</url>';
}
$xml .= '</urlset>';

$path = $_SERVER['DOCUMENT_ROOT'].'/php/clase41/4_trucos/sitemap.xml';
$modo = 'w+';

if($fp = fopen($path,$modo)){
	fwrite($fp,$xml);
	echo '<p>El archivo sitemap se ha creado <strong>correctamente</strong></p>';
}else{
	echo '<p>Ha habido <strong>un problema</strong> al crear el sitemap</p>';
}

?>
</body>
</html>







