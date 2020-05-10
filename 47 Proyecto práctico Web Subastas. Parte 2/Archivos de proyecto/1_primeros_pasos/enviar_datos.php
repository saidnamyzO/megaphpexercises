<?

include("privado/MySQL.php");

$email = htmlentities(addslashes($_POST['email']));

$sql = new MySQL('localhost','root','','subastas'); 
$consulta = $sql->enviarQuery("SELECT * FROM usuarios WHERE email='$email'");

if(!$consulta){
	echo '<p>No hay ningún correo como el indicado en nuestra base de datos</p>';
}else{
	$nombre = $consulta[0]['nombre'];
	$password = $consulta[0]['password'];
	$usuario= $consulta[0]['user'];
	
	//enviamos un correo electrónico
	$destinatario = $email;
	$asunto = "Datos de acceso a la web Subastas";
	$cuerpo = '
	<html>
	<head>
		<title>Datos de acceso a la web Subastas</title>
	</head>
	<body>
	<h3>Datos de acceso a la web de Subastas</h3>
	<p>Estimado '.$nombre.', sus datos de acceso son los siguientes:</p>
	<ul>
		<li>Usuario: '.$usuario.'</li>
		<li>Password: '.$password.'</li>
	</ul>
	</body>
	</html>';
	
	//Headers para el envío del mailing
	$headers = "MIME-Version: 1.0\r\n";
	$headers = "Content-type: text/html; charset=utf-8\r\n";
	
	//Dirección del remitente
	$headers = "From: WEB SUBASTAS <info@websubastas.com>\r\n";
	
	//Dirección de respuesta
	$headers = "Reply-To: info@websubastas.com\r\n";
	
	mail($destinatario,$asunto,$cuerpo,$headers);
	
	echo '<p>Le hemos enviado un correo electrónico con los datos de acceso.</p>';
	
	
}

?>












