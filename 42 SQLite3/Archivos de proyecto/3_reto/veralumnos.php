<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulario Alumnos</title>
<style>
*{
	margin:0;
	padding:0;
}
body{
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
h1{
	text-align:center;
	font-weight:normal;
	color:rgba(63,63,63,1.00);
	font-size:1.3em;
	margin-top:50px;
}
section{
	width:400px;
	padding:1em;
	box-sizing:border-box;
	background:rgba(199,199,199,1.00);
	border:rgba(63,63,63,1.00) 2px solid;
	margin:20px auto;
}
article{
	background:#fff;
	padding:0.5em;
	border-bottom:1px solid rgba(199,199,199,1.00);
	box-sizing:border-box;
}
</style>
</head>

<body>
<h1>Lista de Alumnos</h1>
<section>
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

}

$sql =<<<EOF
      SELECT * from ALUMNOS;
EOF;

$ret = $db->query($sql);
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
	echo "<article>";
	echo "ID = ".$row['ID']."<br/>";
	echo "NOMBRE = ".$row['NOMBRE']."<br/>";
	echo "EDAD = ".$row['EDAD']."<br/>";
	echo "CURSO = ".$row['CURSO']."<br/>";
	echo "NOTAMEDIA = ".$row['NOTAMEDIA']."<br/>";
	echo "</article>";
}

$db->close();



?>
</section>
</body>
</html>