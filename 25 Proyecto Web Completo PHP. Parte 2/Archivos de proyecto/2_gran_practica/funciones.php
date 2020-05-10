<?

include("bbdd/BaseDeDatos.php");
include("bbdd/DBMySql.php");

function conexionBD($consulta){
	$dbLocal = new DBMySql('localhost','root','','bus',3306);
	$valor = $dbLocal->setQuery($consulta);
	return $valor;
}

function menu(){
	$menu = '<li><a href="index.php">Inicio</a></li>
			 <li><a href="alta_autobuses.php">Alta Autobuses</a></li>
			 <li><a href="ver_autobuses.php">Ver Autobuses</a></li>
			 <li><a href="alta_conductores.php">Alta Conductores</a></li>
			 <li><a href="ver_conductores.php">Ver Conductores</a></li>';
			 return $menu;
}

function verAutobuses(){
	$consulta = "SELECT * FROM autobuses";
	$valor = conexionBD($consulta);
	
	$resultado = '';
	while($row = mysql_fetch_assoc($valor)){
		$resultado .= '<h3>Nombre: <span>'.$row['Nombre'].'</span><a href="editar_autobuses.php?id='.$row['ID'].'" class="editar"><img src="images/editar.png"></a></h3>';
		$resultado .= '<h4>Color: <span>'.$row['Color'].'</span></h4>';
		$resultado .= '<h4>Capacidad: <span>'.$row['Capacidad'].'</span></h4>';
	}
	
	return $resultado;
}

?>