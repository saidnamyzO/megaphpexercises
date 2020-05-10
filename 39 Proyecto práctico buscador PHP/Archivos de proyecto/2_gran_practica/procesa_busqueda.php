<?
require_once("BuscadorClass.php");
$bus = new Buscador();
$buscame = $bus->buscar();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Resultados Buscador</title>
<style>
*{
	margin:0;
	padding:0;
}
body{
	background:rgba(240,227,153,1.00);
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
section{
	width:60%;
	max-width:800px;
	margin:20px auto;
	border:3px solid orange;
	background:#fff;
	padding:1.5em;
	box-sizing:border-box;
}
h1{
	font-size:1.3em;
	font-weight:lighter;
	color:rgba(104,104,104,1.00);
	text-align:center;
	margin:1em 0 2em 0;
}
h2{
	font-size:1.1em;
	font-weight:lighter;
	color:red;
	text-align:center;
	margin:1em 0 2em 0;
}
table{
	border:1px solid rgba(236,100,27,1.00);
}
th{
	background:rgba(236,100,27,1.00);
	color:#fff;
	text-align:center;
}
tr{
	border-bottom:1px solid rgba(236,100,27,1.00);;
}
td{
	background:#fff;
	color:rgba(236,100,27,1.00);
}
</style>
</head>

<body>
<section>
<h1>Resultado de la búsqueda</h1>
<table>
	<tr>
    	<th>Título</th>
        <th>Autor</th>
        <th>Mensaje</th>
        <th>Fecha</th>
    </tr>
<?
if(count($buscame)==0){
	echo '<h2>No hay ningún resultado</h2>';
}else{
	echo '<h2>Resultados</h2>';
	for($i=0;$i<sizeof($buscame);$i++){
		?>
        <tr>
        	<td>
            	<?= $buscame[$i]["titulo"] ?>
            </td>
            <td>
            	<?= $buscame[$i]["autor"] ?>
            </td>
            <td>
            	<?= $buscame[$i]["cuerpo"] ?>
            </td>
            <td>
            	<?= $buscame[$i]["fecha"] ?>
            </td>
        </tr>
        <?
	}
}
?>
</table>
</section>
</body>
</html>