<?php

//borrar las variables de sesión
unset($_SESSION);

//borrar la sesión
session_destroy();

//redireccionar a la página de inicio
define('PAGINA_INICIO','../index.php?mensaje=gracias');
header('Location: '.PAGINA_INICIO); //header redirecciona a donde queramos

?>











