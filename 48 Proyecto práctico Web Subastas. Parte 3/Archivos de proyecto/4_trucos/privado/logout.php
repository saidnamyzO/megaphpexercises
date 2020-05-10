<?

include("MySQL.php");
include("funciones.php");

session_destroy();
header('Location: ../index.php?mensaje_error=gracias');

?>