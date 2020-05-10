<?
$mensaje_error = '';
if(isset($_GET['error']) && $_GET['error']=='nologin'){
	$mensaje_error = 'El usuario o la contraseña son erróneos';
}
if(isset($_GET['error']) && $_GET['error']=='nopermiso'){
	$mensaje_error = 'Sus datos todavía no se han validado por la Administración';
}
if(isset($_GET['error']) && $_GET['error']=='gracias'){
	$mensaje_error = 'Gracias por utilizar nuestra aplicación';
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Subastas</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
<script language="javascript">
	function ventanaSecundaria(URL){
		window.open(URL,"ventana1","width=400,height=250,scrollbars=NO");
	}
</script>
</head>

<body>
<div class="container">
	<header>
    	<h1><img src="images/logo.jpg" alt="Web Subastas"/></h1>
        <h2>Tu web de subastas de vehículos usados</h2>
    </header>
    <section>
    	<aside>
        	<img src="images/coche_muestra.jpg" alt="Subastas Online Vehículos Segunda Mano"/>
        </aside>
        <div class="derecha">
        <article>
        <h3>BIENVENIDOS A LA WEB DE SUBASTAS</h3>
        <p>Bienvenidos a nuestra web. En ella podrá encontrar todos los vehículos de ocasión ofrecidos por los concesionarios colaboradores.</p>
        <p><strong>¿Quién puede utilizar esta web?</strong> Solo los usuariso registrados previamente pueden participar en las subastas que se realizarán periódicamente.</p>
        <p><strong>¿Cómo puedo registrarme?</strong> Si eres profesional de los vehículos de ocasión, por favor <a href="registro.php">haz clic aquí</a>. No olvides poner un teléfono de contacto. Te llamaremos lo antes posibles y te explicaremos lo que tienes que hacer.</p> 
        </article>
        <article>
        <form action="autenticar.php" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" required/>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required/>
        <input type="submit" value="Enviar">
        <a href="javascript:ventanaSecundaria('recupera_pass.html')" class="olvide">Olvidé mis datos</a>
        <p class="olvide"><?=$mensaje_error?></p>
        </form>
        </article>
        </div><!-- end .derecha -->
    </section>
    <div class="clearfix"></div><!-- end clearfix-->
    <footer>
    <p>Copyright Web Subastas. Aviso Legal.</p>
    </footer>
</div><!-- end .container -->
</body>
</html>