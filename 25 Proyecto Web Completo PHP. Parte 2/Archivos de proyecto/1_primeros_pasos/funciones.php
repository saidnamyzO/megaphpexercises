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
		$resultado .= '<h3>Nombre: <span>'.$row['Nombre'].'</span></h3>';
		$resultado .= '<h4>Color: <span>'.$row['Color'].'</span></h4>';
		$resultado .= '<h4>Capacidad: <span>'.$row['Capacidad'].'</span></h4>';
	}
	
	return $resultado;
}

?>