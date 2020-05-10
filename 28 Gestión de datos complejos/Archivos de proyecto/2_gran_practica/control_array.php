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

$arrSueldos = array(1200,599,6725,983,12500);

$sueldos = new ArrayUtils($arrSueldos);
echo 'IMPRIMO EL ARRAY SUELDOS';
echo "<pre>";
print_r ($sueldos->verArray());
echo "</pre>";

echo 'La media de sueldos es = '.$sueldos->calcularMediaArray().'€';
echo '<br/>';

$sueldos->calcularMaximoArray();
echo 'El sueldo máximo es = '.$sueldos->calcularMaximoArray().'€';


$arrNombres = array('Jose','Juan','Miguel','María','Mónica','Benjamín','Bartolomé');
$nombres = new ArrayUtils($arrNombres);
echo '<br/>';
echo 'ELEGIR NOMBRES CON UNA LETRA';
echo "<pre>";
print_r ($nombres->verArray());
echo "</pre>";

$nombres->mostrarArrayLetra();

?>