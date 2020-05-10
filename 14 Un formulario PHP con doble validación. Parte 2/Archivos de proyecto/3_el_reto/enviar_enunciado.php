<?php

$correo_enviar = 'moises@moises.com';
$nombre = strip_tags(htmlentities($_POST['nombre']));
$email = strip_tags(htmlentities($_POST['email']));
$asunto = 'Mensaje recibido desde Mis Zapatos Favoritos';
$mensaje = strip_tags(htmlentities($_POST['mensaje']));

//Construimos el cuerpo del mensaje
$cuerpo = "Mensaje enviado por <strong>$nombre</strong><br/>";
$cuerpo .= "Email: $email<br/>";
$cuerpo .= "Mensaje: $mensaje<br/>";
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

Header("Location: http://localhost/cursophp/clase10/index.php?id=contacto-recibido");

?>
