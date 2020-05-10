<?
$mensaje_ok = '';
if(isset($_GET['mensaje']) && $_GET['mensaje']=='ok'){
	$mensaje_ok = 'Se ha registrado correctamente. En breve contactaremos con usted.';
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Subastas. Registro</title>
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
        <h2>Registro de Usuarios</h2>
    </header>
    <section>
    	<aside>
        	<img src="images/coche_muestra.jpg" alt="Subastas Online Vehículos Segunda Mano"/>
        </aside>
        <div class="derecha">
        <article>
        <h3>FORMULARIO DE REGISTRO</h3>
        <?= $mensaje_ok ?>
        <form action="procesar_registro.php" method="post" class="registro">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required/>
        <label for="nif">NIF</label>
        <input type="text" name="nif" id="nif" required/>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required/>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" required/>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required/>
        <input type="submit" value="Enviar">
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