<?

session_start();
$_SESSION['count']=time();
$image;

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Captcha</title>
<style>
*{
	margin:0;
	padding:0;
}
body{
	background:#ddd;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
section{
	width:400px;
	margin:20px auto;
	background:#fff;
	padding:2em;
	box-sizing:border-box;
	border:2px solid rgba(110,110,110,1.00);
}
h1{
	text-align:center;
	font-size:1.2em;
	font-weight:bold;
}
p{
	text-align:center;
	font-size:1em;
	margin:10px 0;
}
form input{
	width:100%;
	font-size:1em;
	padding:0.3em;
	box-sizing:border-box;
	margin:15px 0 0 0;
}
form input[type=submit]{
	background:brown;
	color:#fff;
	border:none;
	width:50%;
	margin-left:25%;
	font-weight:lighter;
}
</style>
</head>

<body>
<?
$flag = 5;
if(isset($_POST['flag'])){
	$input = $_POST['input'];
	$flag = $_POST['flag'];
}


function create_image(){
}

?>


<section>
	<h1>Pon el texto que ves en la imagen</h1>
    <p>Esto es para verificar que no eres un robot</p>
    <div>
    Aquí irá el captcha
    </div>
    <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
    	<input type="text" name="input"/>
        <input type="hidden" name="flag" value="1"/>
        <input type="submit" value="Enviar" name="submit"/>
    </form>
    <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="submit" value="Refrescar la página"/>
    </form>
</section>

</body>
</html>










