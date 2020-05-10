<?

require("ArrayUtils.php");

$arrProfesiones = array("Mecánico","Fontanero","Arquitecto","Pintor","Administrativo");

$arrayUtils = new ArrayUtils($arrProfesiones);

echo 'IMPRIMO ARRAY';
echo "<pre>";
print_r ($arrayUtils->verArray());
echo "</pre>";

$arrayUtils->agregarElemento('Informático');

echo 'AGREGO UN ELEMENTO AL FINAL';
echo "<pre>";
print_r ($arrayUtils->verArray());
echo "</pre>";

$arrayUtils->agregarElemento('Electricista','4');

echo 'AGREGO UN ELEMENTO EN LA POSICIÓN 4';
echo "<pre>";
print_r ($arrayUtils->verArray());
echo "</pre>";

$arrayUtils->eliminarElemento(2);

echo 'ELIMINO EL ELEMENTO 2';
echo "<pre>";
print_r ($arrayUtils->verArray());
echo "</pre>";

?>