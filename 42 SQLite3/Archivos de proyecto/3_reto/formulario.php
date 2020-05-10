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
input, label{
	width:100%;
	font-size:1em;
	color: rgba(63,63,63,1.00);
	padding:0.3em 0.5em;
	box-sizing:border-box;
	border:none;
	margin:0 0 15px 0;
}
input{
	background:#fff;
}
input[type=submit]{
	width:50%;
	background:rgba(63,63,63,1.00);
	color:#fff;
}
</style>
</head>

<body>
<h1>Dar de Alta Alumnos</h1>
<section>
	<form action="procesa.php" method="post">
    <label for="ID">ID</label>
    <input type="text" name="ID" id="ID"/>
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre"/>
    <label for="Edad">Edad</label>
    <input type="text" name="Edad" id="Edad"/>
    <label for="Curso">Curso</label>
    <input type="text" name="Curso" id="Curso"/>
    <label for="NotaMedia">Nota Media</label>
    <input type="text" name="NotaMedia" id="NotaMedia"/>
    <input type="submit" value="Enviar"/>
    
    </form>
</section>
</body>
</html>