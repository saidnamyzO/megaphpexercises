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
div{
	margin:10px auto 0 auto;
	width:250px;
	border:1px solid rgba(14,74,158,1.00);
}
div img{
	width:100%;
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
span{
	text-align:center;
	color:red;
}
</style>
</head>

<body>
<?
$flag = 5;
$resultado = '';
if(isset($_POST['flag'])){
	$input = $_POST['input'];
	$flag = $_POST['flag'];
}

if($flag == 1){
	if($input == $_SESSION['captcha_string']){
		$resultado = "Respuesta correcta";
	}else{
		$resultado = "Respuesta incorrecta";
		create_image();
	}
}else{
	create_image();
}


function create_image(){
	global $image;
	$image = imagecreatetruecolor(250,50) or die('No se puede inicializar la librería GD');
	$background_color = imagecolorallocate($image, 255,255,255);
	$text_color = imagecolorallocate($image, 0, 255, 255);
	$line_color = imagecolorallocate($image, 64, 64, 64);
	$pixel_color = imagecolorallocate($image, 0, 0, 255);
	
	imagefilledrectangle($image, 0, 0, 250, 50, $background_color);
	
	for ($i=0; $i<3; $i++){
		imageline($image, 0, rand() %50, 300, rand() % 50, $line_color);
	}
	
	for ($i=0; $i<1000; $i++){
		imagesetpixel($image, rand() %250, rand() % 50, $pixel_color);
	}
	
	$letters='ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz';
	$len = strlen($letters);
	$letter = $letters[rand(0, $len - 1)];
	
	$text_color = imagecolorallocate($image, 0, 0, 0);
	$word = '';
	
	for($i = 0; $i < 6; $i++){
		$letter = $letters[rand(0, $len-1)];
		imagestring($image,7,5 + ($i * 30), 20, $letter, $text_color);
		$word .= $letter;
	}
	
	$_SESSION['captcha_string'] = $word;
	
	$images = glob("*.png");
	foreach ($images as $image_to_delete){
		@unlink($image_to_delete);
	}
	
	imagepng($image,"image".$_SESSION['count'].".png");
	
}

?>


<section>
	<h1>Pon el texto que ves en la imagen</h1>
    <p>Esto es para verificar que no eres un robot</p>
    <div>
    <img src="image<?php echo $_SESSION['count'] ?>.png"/>
    </div>
    <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
    	<input type="text" name="input"/>
        <input type="hidden" name="flag" value="1"/>
        <input type="submit" value="Enviar" name="submit"/>
    </form>
    <span><?= $resultado ?></span>
    <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="submit" value="Refrescar la página"/>
    </form>
</section>

</body>
</html>










