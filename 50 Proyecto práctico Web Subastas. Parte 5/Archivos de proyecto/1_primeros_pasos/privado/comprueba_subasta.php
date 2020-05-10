<?
include("MySQL.php");
if(isset($_SESSION['nivel']) &&  $_SESSION['nivel'] == '1'){
	


	function comprueba(){
	$sql = new MySQL('localhost','root','','subastas'); 
	$consulta = $sql->enviarQuery("SELECT * FROM subasta WHERE id = '1'");
	$respuesta = $consulta[0]['activa'];
	if($respuesta =='si'){
		$resultado = 'si';
	}else{
		$resultado = 'no';
	}
	return $resultado;
	}
	

}else{
	header('Location:../index.php');
}
?>