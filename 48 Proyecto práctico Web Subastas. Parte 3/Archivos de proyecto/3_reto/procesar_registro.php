<?

include("privado/MySQL.php");
include("privado/funciones.php");

$nombre = addslashes(strip_tags($_POST['nombre']));
$NIF = addslashes(strip_tags($_POST['nif']));
$email = addslashes(strip_tags($_POST['email']));
$usuario = addslashes(strip_tags($_POST['usuario']));
$password = addslashes(strip_tags($_POST['password']));

$sql = new MySQL('localhost','root','','subastas'); 
$consulta = $sql->enviarQuery("INSERT INTO usuarios (nombre,user,password,email,NIF) VALUE ('$nombre','$usuario', '$password', '$email','$NIF')");

$nombre_tabla = "cotizaciones_".+$NIF;
	
mysql_query("CREATE TABLE  `".$nombre_tabla."` (
`id` int(4) NOT NULL auto_increment,
  `bastidor` varchar(20) collate latin1_spanish_ci NOT NULL,
  `subasta` varchar(2) collate latin1_spanish_ci NOT NULL,
  `puja` varchar(8) collate latin1_spanish_ci NOT NULL,
  `puja_maxima` varchar(8) collate latin1_spanish_ci default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=32 ;");


header('Location:registro.php?mensaje=ok');

?>