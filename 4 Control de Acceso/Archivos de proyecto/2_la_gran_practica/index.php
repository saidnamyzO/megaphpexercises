<?php
	$error = "";
	if(isset($_GET['mensaje'])&&($_GET['mensaje']=='mensaje_error')){
		$error = "Su usuario o contraseña son incorrectos";
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Acceso Privado</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="intranet.js"></script>
</head>

<body>
<div id="form_home">
	<form action="login/autenticar.php" method="post" onSubmit="return validacion_index()" id="f_inicio" name="f_inicio">
    
    <label for="email" class="email">Usuario</label>
    <input type="text" name="p_username" id="p_username"/>
    
    <label for="pass" class="pass">Contraseña</label>
    <input type="password" name="p_password" id="p_password"/>
    
    <br class="clearfloat"/>
    
    <input type="submit" value="Entrar" class="b_inicio"/>
    
    </form>
    <p class="rojo"><? echo $error ?></p>
</div>

</body>
</html>