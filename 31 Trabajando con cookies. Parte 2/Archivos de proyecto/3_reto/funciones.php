<?

include("bbdd/BaseDeDatos.php");
include("bbdd/DBMySql.php");
include("clases/Autobuses.php");
include("clases/Validacion.php");
include("clases/Login.php");
session_start();

if(isset($_POST['login'])){
	login();
}

if(isset($_GET['salir'])){
	logout();
}


if(isset($_POST['alta'])){
	validaAltaAutobus();
}

if(isset($_POST['editar'])){
	editarAutobus();
}

if(isset($_GET['borrar'])){
	borrarAutobus($_GET['borrar']);
}

function conexionBD($consulta){
	$dbLocal = new DBMySql('localhost','root','','bus',3306);
	$valor = $dbLocal->setQuery($consulta);
	return $valor;
}

function login(){
	$user = $_POST['Usuario'];
	$pass = $_POST['Password'];
	$consulta = "SELECT * FROM usuarios WHERE email='$user' AND password='$pass'";
	$valor = conexionBD($consulta);
	
	if(mysql_num_rows($valor)!=0){
		$state = true;
	}else{
		$state = false;
	}
	
	$login = new Login();
	$login->inicia(3600,$_POST['Usuario'],$_POST['Usuario'],$state);
}

function logout(){
	$login = new Login();
	$login->cerrarSesion();
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

function editarAutobus(){
	$id = htmlentities($_POST['ID']);
	$nombre = htmlentities($_POST['Nombre']);
	$color = htmlentities($_POST['Color']);
	$capacidad = htmlentities($_POST['Capacidad']);
	$consulta = "UPDATE autobuses SET Nombre='$nombre', Color='$color', Capacidad='$capacidad' WHERE ID='$id'";
	
	conexionBD($consulta);
	header('Location:editar_autobuses.php?id='.$id);
}

function borrarAutobus($id){
	$consulta = "DELETE FROM autobuses WHERE ID='$id'";
	conexionBD($consulta);
	header('Location:ver_autobuses.php');
}
	
?>






