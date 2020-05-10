<?
	$mensaje_error='';
	if(isset($_GET['error']) && $_GET['error']=='1'){
		$mensaje_error = 'El usuario o la contraseña son incorrectos';
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Acceso Privado</title>
<link href="../estilos.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="container">

	<header>
    	<h1>Mi empresa</h1>
    </header>
    
	<div class="formulario_acceso">
    	<form method="post" action="autenticar.php">
        	<label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario"/>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password"/>
            <input type="submit" value="Entrar"/>
        </form>
        <p class="error"><?= $mensaje_error ?></p>
   	</div>
    
 </div>
</body>
</html>