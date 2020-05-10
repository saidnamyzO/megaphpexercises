<?

include("BaseDeDatos.php");

$prueba = new BaseDeDatos('localhost','root','','bus',3306,'mysql');

$prueba->verConfiguracion();

echo'<pre>';
print_r($prueba);
echo '</pre>';

?>