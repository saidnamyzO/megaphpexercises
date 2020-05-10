<?php

$correo_enviar = $_GET['email'];
$usuario = strip_tags(htmlentities($_GET['username']));
$password = strip_tags(htmlentities($_GET['password']));
$asunto = 'Envío de contraseña';


//Construimos el cuerpo del mensaje
$cuerpo = "Mensaje enviado por por la web que sea<br/>";
$cuerpo .= "Estos son sus datos de acceso<br/>";
$cuerpo .= "Usuario: $usuario<br/>";
$cuerpo .= "Password: $password<br/>";
$cuerpo .= "-----------------------------------";



//preparando la cabecera para el envío del correo en formato HTML
$headers = "MIME-Version: 1.0\r\n";

//dirección del remitente
$headers .= "From: contacto@moises.com\r\n";

//dirección de respuesta, si queremos que sea diferente de la del remitente
$headers .= "Reply-To: contacto@moises.com\r\n";

//ruta del mensaje desde origen al destino
$headers .= "Return-path: contacto@moises.com\r\n";

mail($correo_enviar,$asunto,$cuerpo,$headers);

Header("Location: formulario.php?mensaje=ok");

?>
