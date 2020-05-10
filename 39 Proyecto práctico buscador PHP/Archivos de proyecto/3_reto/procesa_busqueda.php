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
table.table1{
    font-family: "Trebuchet MS", sans-serif;
    font-size: 16px;
    font-weight: bold;
    line-height: 1.4em;
    font-style: normal;
    border-collapse:separate;
}
.table1 thead th{
    padding:15px;
    color:#fff;
    text-shadow:1px 1px 1px #568F23;
    border:1px solid #93CE37;
    border-bottom:3px solid #9ED929;
    background-color:#9DD929;
    background:-webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.02, rgb(123,192,67)),
        color-stop(0.51, rgb(139,198,66)),
        color-stop(0.87, rgb(158,217,41))
        );
    background: -moz-linear-gradient(
        center bottom,
        rgb(123,192,67) 2%,
        rgb(139,198,66) 51%,
        rgb(158,217,41) 87%
        );
    -webkit-border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-radius:5px 5px 0px 0px;
    border-top-left-radius:5px;
    border-top-right-radius:5px;
}
.table1 thead th:empty{
    background:transparent;
    border:none;
}
.table1 tbody th{
    color:#fff;
    text-shadow:1px 1px 1px #568F23;
    background-color:#9DD929;
    border:1px solid #93CE37;
    border-right:3px solid #9ED929;
    padding:0px 10px;
    background:-webkit-gradient(
        linear,
        left bottom,
        right top,
        color-stop(0.02, rgb(158,217,41)),
        color-stop(0.51, rgb(139,198,66)),
        color-stop(0.87, rgb(123,192,67))
        );
    background: -moz-linear-gradient(
        left bottom,
        rgb(158,217,41) 2%,
        rgb(139,198,66) 51%,
        rgb(123,192,67) 87%
        );
    -moz-border-radius:5px 0px 0px 5px;
    -webkit-border-top-left-radius:5px;
    -webkit-border-bottom-left-radius:5px;
    border-top-left-radius:5px;
    border-bottom-left-radius:5px;
}
.table1 tfoot td{
    color: #9CD009;
    font-size:32px;
    text-align:center;
    padding:10px 0px;
    text-shadow:1px 1px 1px #444;
}
.table1 tfoot th{
    color:#666;
}
.table1 tbody td{
    padding:10px;
    text-align:center;
    background-color:#DEF3CA;
    border: 2px solid #E7EFE0;
    -moz-border-radius:2px;
    -webkit-border-radius:2px;
    border-radius:2px;
    color:#666;
    text-shadow:1px 1px 1px #fff;
}
.table1 tbody span.check::before{
    content : url(../images/check0.png)
}
</style>
</head>

<body>
<section>
<h1>Resultado de la búsqueda</h1>

<?
if(count($buscame)==0){
	echo '<h2>No hay ningún resultado</h2>';
}else{
	echo '<table class="table1">
			<tr>
    			<th>Título</th>
        		<th>Autor</th>
        		<th>Contenido</th>
        		<th>Fecha</th>
    		</tr>';
	echo '<h2>Resultados</h2>';
	for($i=0;$i<sizeof($buscame);$i++){
		?>
        <tr>
        	<td>
            	<a href="vista_blog.php?id=<?= $buscame[$i]["id"] ?>"><?= $buscame[$i]["titulo"] ?></a>
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