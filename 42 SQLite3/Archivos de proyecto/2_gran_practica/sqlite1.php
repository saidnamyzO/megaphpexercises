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
      CREATE TABLE COMPANY
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      AGE            INT     NOT NULL,
      ADDRESS        CHAR(50),
      SALARY         REAL);
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