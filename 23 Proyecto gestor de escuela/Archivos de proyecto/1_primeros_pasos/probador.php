<?

require("Persona.php");
require("Fecha.php");

$fecha = new Fecha(9,12,1999);

$persona = new Persona('012345678A','Javier','Fernández de Pablo','Calle Soria, 25',$fecha->toString());
print $persona->toString();

?>