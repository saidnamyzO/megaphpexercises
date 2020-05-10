<?

class MyDB extends SQLite3
{
	function __construct()
	{
		$this->open('alumnos.db');
	}
}

//Variables recibidas del formulario
$ID = $_POST['ID'];
$NOMBRE = $_POST['Nombre'];
$EDAD = $_POST['Edad'];
$CURSO = $_POST['Curso'];
$NOTAMEDIA = $_POST['NotaMedia'];

//instancio la clase para SQLite3
$db = new MyDB();
if(!$db){
	echo $db->lastErrorMsg();
}else{
	echo 'Se ha abierto la base de datos con éxito';
	echo '<br/>';
}
 
 $sql =<<<EOF
      INSERT INTO ALUMNOS (ID,NOMBRE,EDAD,CURSO,NOTAMEDIA)
	  VALUES ($ID, '$NOMBRE', $EDAD, $CURSO, $NOTAMEDIA);
EOF;

$ret = $db->exec($sql);
if(!$ret){
	echo $db->lastErrorMsg();
}else{
	$db->close();
	Header('Location:veralumnos.php');
}




?>