<?

include('../priv2467/configuracion.php');

if($_SESSION['level']=='1'){
	


$texto[] = array();
$sql = "SELECT * FROM aviso_legal";
$r = mysql_query($sql);

//muestra la cantidad de filas
$numero_filas = mysql_num_rows($r);
$numero_final = $numero_filas + 1;

for($y=1; $y<$numero_final; $y++){
	$variable_texto = 'texto';
	$texto[$y] = addslashes($_POST[$variable_texto.$y]);
}

for($x=1; $x<$numero_final; $x++){
	mysql_query("UPDATE aviso_legal SET parrafo = '$texto[$x]' WHERE id = '$x'");
}

$nuevo_parrafo = addslashes($_POST['nuevo_parrafo']);
if($nuevo_parrafo != ''){
	mysql_query("INSERT into aviso_legal (id,parrafo) VALUES ($numero_final,'$nuevo_parrafo')");
}

header('Location: editar_legal.php');


}else{
	header('Location:../index.php');
}

?>