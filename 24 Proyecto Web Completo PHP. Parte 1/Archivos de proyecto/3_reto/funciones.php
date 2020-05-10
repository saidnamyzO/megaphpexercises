<?

include("bbdd/BaseDeDatos.php");
include("bbdd/DBMySql.php");

function conexionBD($consulta){
	$dbLocal = new DBMySql('localhost','root','','bus',3306);
	$valor = $dbLocal->setQuery($consulta);
	return $valor;
}

function verAutobuses(){
	$consulta = "SELECT * FROM autobuses";
	$valor = conexionBD($consulta);
	
	$resultado = '';
	while($row = mysql_fetch_assoc($valor)){
		$resultado .= 'Nombre: '.$row['Nombre'].'<br/>';
		$resultado .= 'Color: '.$row['Color'].'<br/>';
		$resultado .= 'Capacidad: '.$row['Capacidad'].'<br/>';
	}
	
	return $resultado;
}

?>