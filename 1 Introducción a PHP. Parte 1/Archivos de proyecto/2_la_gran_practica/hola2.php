<?php
	$nombre = 'María';
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Hola 2</title>
<style type="text/css">
	p{
		font-size:1.5em;
		font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
		color:red;
		width:80%;
		margin:3em auto;
	}
	.imagen{
		width:150px;
		margin:0 auto;
	}
</style>
</head>

<body>
<p><? echo '<img src="avatar.png" alt="Mi Avatar" class="imagen"/>'; ?> Hola, ¿qué tal estás <? echo $nombre ?>?</p>

</body>
</html>