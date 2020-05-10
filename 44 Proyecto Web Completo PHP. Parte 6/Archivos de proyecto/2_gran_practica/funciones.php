<?

include("bbdd/BaseDeDatos.php");
include("bbdd/DBMySql.php");
include("clases/Autobuses.php");
include("clases/Conductores.php");
include("clases/Validacion.php");
include("clases/Viajes.php");

if(isset($_POST['alta'])){
	validaAltaAutobus();
}

if(isset($_POST['altaconductor'])){
	altaConductor();
}

if(isset($_POST['altaviajes'])){
	altaViajes();
}

if(isset($_POST['editar'])){
	editarAutobus();
}

if(isset($_POST['editarconductor'])){
	editarConductor();
}

if(isset($_GET['borrar'])){
	borrarAutobus($_GET['borrar']);
}

if(isset($_GET['borrarconductor'])){
	borrarConductor($_GET['borrarconductor']);
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

function validaAltaAutobus(){
	$nombre = $_POST['Nombre'];
	$color = $_POST['Color'];
	$capacidad = $_POST['Capacidad'];
	$validacion = new Validacion();
	$error_nombre = $validacion->ValidaTexto($nombre,false,false,true,'Por favor, tienes que poner tu nombre');
	$error_color = $validacion->ValidaTexto($color,false,false,true,'Por favor, tienes que poner el color');
	$error_capacidad = $validacion->ValidaTexto($capacidad,false,false,true,'Por favor, tienes que poner la capacidad');
	if($error_nombre==1  ){
		if($error_color==1){
			if($error_capacidad==1){
				altaAutobus($nombre,$color,$capacidad);
			}else{
				header('Location:alta_autobuses.php?error=capacidad');
			}
		}else{
			header('Location:alta_autobuses.php?error=color');
		}	
	}else{
		header('Location:alta_autobuses.php?error=nombre');
	}
		
	
}

function altaAutobus($nombre,$color,$capacidad){
	$autobus = new Autobuses($nombre,$color,$capacidad);
	conexionBD($autobus->darDeAlta());
	header('Location:ver_autobuses.php');
}

function altaConductor(){
	$nombre = $_POST['nombre'];
	$fnacimiento = $_POST['fnacimiento'];
	$nif = $_POST['nif'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$carnet = $_POST['carnet'];
	$conductor = new Conductores($nombre,$fnacimiento,$nif,$telefono,$email,$carnet);
	conexionBD($conductor->darDeAlta());
	header('Location:ver_conductores.php');
}

function altaViajes(){
	$nombre = $_POST['nombre'];
	$autobus = $_POST['autobus'];
	$conductor = $_POST['conductor'];
	$fecha = $_POST['fecha'];
	
	$consulta = "SELECT * FROM autobuses WHERE Nombre='$autobus'";
	$resultado = conexionBD($consulta);
	while($row = mysql_fetch_assoc($resultado)){
		$capacidad = $row['Capacidad'];
	}
	
	$capacidad = (int)$capacidad;
	
	$viaje = new Viajes($nombre,$autobus,$conductor,$fecha,$capacidad);
	conexionBD($viaje->darDeAlta());
	header('Location:ver_viajes.php');
	
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

function verConductores(){
	$consulta = "SELECT * FROM conductores";
	$valor = conexionBD($consulta);
	
	$resultado = '';
	while($row = mysql_fetch_assoc($valor)){
		$resultado .= '<h3>Nombre: <span>'.$row['nombre'].'</span><a href="editar_conductores.php?id='.$row['id'].'" class="editar"><img src="images/editar.png"></a></h3>';
		$resultado .= '<h4>Fecha Nacimiento: <span>'.$row['fnacimiento'].'</span></h4>';
		$resultado .= '<h4>NIF: <span>'.$row['nif'].'</span></h4>';
		$resultado .= '<h4>Teléfono: <span>'.$row['telefono'].'</span></h4>';
		$resultado .= '<h4>Email: <span>'.$row['email'].'</span></h4>';
		$resultado .= '<h4>Carnet: <span>'.$row['carnet'].'</span></h4>';
	}
	
	return $resultado;
}

function verViajes(){
	$consulta = "SELECT * FROM viajes";
	$valor = conexionBD($consulta);
	
	$resultado = '';
	while($row = mysql_fetch_assoc($valor)){
		$resultado .= '<h3>Nombre: <span>'.$row['nombre'].'</span></h3>';
		$resultado .= '<h4>Autobus: <span>'.$row['autobus'].'</span></h4>';
		$resultado .= '<h4>Conductor: <span>'.$row['conductor'].'</span></h4>';
		$resultado .= '<h4>Fecha: <span>'.$row['fecha'].'</span></h4>';
		$resultado .= '<h4>Plazas Disponibles: <span>'.$row['capacidad'].'</span></h4>';
	}
	
	return $resultado;
}

function verViajes2(){
	$consulta = "SELECT * FROM viajes";
	$valor = conexionBD($consulta);
	
	$resultado = '';
	while($row = mysql_fetch_assoc($valor)){
		$resultado .= '<h3>Nombre: <span>'.$row['nombre'].'</span> - Fecha: <span>'.$row['fecha'].'</span></h3>';
		$resultado .= '<h4>Plazas Disponibles: <span>'.$row['capacidad'].'</span></h4>';
	}
	
	return $resultado;
}

function cargarAutobusEditar($id){
	$consulta = "SELECT * FROM autobuses WHERE ID='$id'";
	$valor = conexionBD($consulta);
	while($row = mysql_fetch_assoc($valor)){
			$nombre = $row['Nombre'];
			$color = $row['Color'];
			$capacidad = $row['Capacidad'];
	}
	$resultado = Array($nombre,$color,$capacidad);
	return $resultado;
}

function cargarConductorEditar($id){
	$consulta = "SELECT * FROM conductores WHERE ID='$id'";
	$valor = conexionBD($consulta);
	while($row = mysql_fetch_assoc($valor)){
			$nombre = $row['nombre'];
			$fnacimiento = $row['fnacimiento'];
			$nif = $row['nif'];
			$telefono = $row['telefono'];
			$email = $row['email'];
			$carnet = $row['carnet'];
	}
	$resultado = Array($nombre,$fnacimiento,$nif,$telefono,$email,$carnet);
	return $resultado;
}

function editarAutobus(){
	$id = htmlentities($_POST['ID']);
	$nombre = htmlentities($_POST['Nombre']);
	$color = htmlentities($_POST['Color']);
	$capacidad = htmlentities($_POST['Capacidad']);
	$consulta = "UPDATE autobuses SET Nombre='$nombre', Color='$color', Capacidad='$capacidad' WHERE ID='$id'";
	
	conexionBD($consulta);
	header('Location:editar_autobuses.php?id='.$id);
}

function editarConductor(){
	$id = htmlentities($_POST['ID']);
	$nombre = htmlentities($_POST['nombre']);
	$fnacimiento = htmlentities($_POST['fnacimiento']);
	$nif = htmlentities($_POST['nif']);
	$telefono = htmlentities($_POST['telefono']);
	$email = htmlentities($_POST['email']);
	$carnet = htmlentities($_POST['carnet']);
	$consulta = "UPDATE conductores SET nombre='$nombre', fnacimiento='$fnacimiento', nif='$nif', telefono='$telefono', email='$email', carnet='$carnet' WHERE id='$id'";
	
	conexionBD($consulta);
	header('Location:editar_conductores.php?id='.$id);
}

function borrarAutobus($id){
	$consulta = "DELETE FROM autobuses WHERE ID='$id'";
	conexionBD($consulta);
	header('Location:ver_autobuses.php');
}

function borrarConductor($id){
	$consulta = "DELETE FROM conductores WHERE ID='$id'";
	conexionBD($consulta);
	header('Location:ver_conductores.php');
}

function selectAutobuses(){
	$consulta = "SELECT * FROM autobuses";
	$valor = conexionBD($consulta);
	$n = 0;
	$resultado = Array();
	while($row = mysql_fetch_assoc($valor)){
			$resultado[$n] = $row['Nombre'];
			$n++;
	}
	return $resultado;
}

function selectConductores(){
	$consulta = "SELECT * FROM conductores";
	$valor = conexionBD($consulta);
	$n = 0;
	$resultado = Array();
	while($row = mysql_fetch_assoc($valor)){
			$resultado[$n] = $row['nombre'];
			$n++;
	}
	return $resultado;
}

function selectViajes(){
	$consulta = "SELECT * FROM viajes";
	$valor = conexionBD($consulta);
	$n = 0;
	$resultado = Array();
	while($row = mysql_fetch_assoc($valor)){
			$resultado[$n] = $row['nombre'];
			$n++;
	}
	return $resultado;
}
	
?>






