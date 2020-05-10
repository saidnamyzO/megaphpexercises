<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Buscador</title>
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
	width:350px;
	margin:100px auto;
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
}
input{
	width:100%;
	border:none;
	font-size:1em;
	padding:0.3em;
	box-sizing:border-box;
	background:rgba(220,220,220,1.00);
	color:rgba(104,104,104,1.00);
	margin-top:20px;
}
input[type=submit]{
	width:50%;
	margin-left:25%;
	background:rgba(104,104,104,1.00);
	color:#fff;
	
}
</style>
</head>

<body>
<section>
	<h1>Escribe lo que quieres buscar</h1>
    <form action="procesa_busqueda.php" method="post">
    	<input type="text" name="busqueda">
        <input type="submit" value="Buscar"/>
    </form>
</section>
</body>
</html>