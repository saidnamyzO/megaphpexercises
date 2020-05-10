<?

include("BaseDeDatos.php");
include("DBMySql.php");
include("DBMsSql.php");

//$prueba = new BaseDeDatos('localhost','root','','bus',3306,'mysql');
//$prueba->verConfiguracion();

$dbLocal = new DBMySql('localhost','root','','bus',3306);
$dbLocal->setQuery('SELECT * FROM autobuses');
$dbLocal->verConfiguracion();

echo '<pre>';
print_r ($dbLocal->queryToArray());
echo '</pre>';

?>