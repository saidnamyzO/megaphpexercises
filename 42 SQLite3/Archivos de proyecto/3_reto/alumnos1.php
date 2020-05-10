<?php

class MyDB extends SQLite3
{
	function __construct()
	{
		$this->open('alumnos.db');
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
      CREATE TABLE ALUMNOS
      (ID INT PRIMARY KEY     NOT NULL,
      NOMBRE          TEXT    NOT NULL,
      EDAD            INT     NOT NULL,
      CURSO       	  INT     NOT NULL,
      NOTAMEDIA         REAL);
EOF;

$ret = $db->exec($sql);
if(!$ret){
	echo $db->lastErrorMsg();
}else{
	echo 'La tabla se ha creado correctamente';
	echo '<br/>';
}

$db->close();



?>