<?

include("bbdd/BaseDeDatos.php");
include("bbdd/DBMySql.php");
include("clases/Autobuses.php");

if(isset($_POST['alta'])){
	altaAutobus();
}

function conexionBD($consulta){
	$dbLocal = new DBMySql('localhost','root','','bus',3306);
	$valor = $dbLocal->setQuery($consulta);
	return $valor;
}

function menu($numero){
	$class1='';$class2='';$class3='';$class4='';$class5='';
	
	switch ($numero) {
    case 1:
        $class1='active';
        break;
    case 2:
        $class2='active';
        break;
    case 3:
        $class3='active';
        break;
	case 4:
        $class4='active';
        break;
	case 5:
        $class5='active';
        break;
}
	
	$menu = '<li><a href="index.php" class="'.$class1.'">Inicio</a></li>
			 <li><a href="alta_autobuses.php" class="'.$class2.'">Alta Autobuses</a></li>
			 <li><a href="ver_autobuses.php" class="'.$class3.'">Ver Autobuses</a></li>
			 <li><a href="alta_conductores.php" class="'.$class4.'">Alta Conductores</a></li>
			 <li><a href="ver_conductores.php" class="'.$class5.'">Ver Conductores</a></li>';
			 return $menu;
}

function altaAutobus(){
	$nombre = $_POST['Nombre'];
	$color = $_POST['Color'];
	$capacidad = $_POST['Capacidad'];
	$autobus = new Autobuses($nombre,$color,$capacidad);
	conexionBD($autobus->consulta());
	header('Location:ver_autobuses.php');
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