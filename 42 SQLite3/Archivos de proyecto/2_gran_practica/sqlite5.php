<?php

class MyDB extends SQLite3
{
	function __construct()
	{
		$this->open('test.db');
	}
}

$db = new MyDB();
if(!$db){
	echo $db->lastErrorMsg();
}else{
	echo 'Se ha abierto la base de datos con éxito';
	echo '<br/>';
}
 
 $sql =<<<EOF
      DELETE from COMPANY where ID=2;
EOF;

$ret = $db->exec($sql);
if(!$ret){
	echo $db->lastErrorMsg();
}else{
	echo $db->changes(), 'El registro se borrado correctamente';
	echo '<br/>';
}

$sql =<<<EOF
      SELECT * from COMPANY;
EOF;

$ret = $db->query($sql);
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
	echo "ID = ".$row['ID']."<br/>";
	echo "NAME = ".$row['NAME']."<br/>";
	echo "ADDRESS = ".$row['ADDRESS']."<br/>";
	echo "SALARY = ".$row['SALARY']."<br/>";
	echo "<hr>";
}
echo 'Se ha generado la consulta con éxito';
$db->close();



?>