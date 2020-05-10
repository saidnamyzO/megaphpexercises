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
      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
	  VALUES (1, 'Moises', 42, 'Segovia', 200000.00);
	  
	  INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
	  VALUES (2, 'Laura', 29, 'Valencia', 150000.00);
	  
	  INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
	  VALUES (3, 'Francisco', 36, 'Malaga', 120000.00);
	  
	  INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
	  VALUES (4, 'Marcelo', 21, 'Bilbao', 50000.00);
EOF;

$ret = $db->exec($sql);
if(!$ret){
	echo $db->lastErrorMsg();
}else{
	echo 'Los registros se han grabado correctamente.';
	echo '<br/>';
}

$db->close();



?>