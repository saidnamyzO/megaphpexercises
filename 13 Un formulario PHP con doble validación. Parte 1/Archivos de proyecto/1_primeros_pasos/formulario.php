<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Doble validación</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="formulario.js"></script>
<link rel="stylesheet" type="text/css" href="formulario.css" />
</head>

<body>
<div class="wrapper">
	<div class="section">
    <h1>Formulario de contacto</h1>
    <h2>Doble validación</h2>
    	<form id="form1" action="formulario.php" method="post">
        	<label for="username">Nombre de usuario (<span id="req-username" class="requisites">A-z, mínimo 4 caracteres</span>):</label>
            <input tabindex="1" name="username" id="username" type="text" class="text" value=""/>
            
            <label for="password1">Contraseña <span id="req-password1" class="requisites" >Mínimo 5 caracteres, máximo 12 caracteres, letras y números</span>):</label>
            <input form="password1" tabindex="2" name="password1" id="password1" type="password" class="text" value=""/>
            
            <label for="password2">Repetir Contraseña <span id="req-password2" class="requisites" >Debe ser igual a la anteriro</span>):</label>
            <input form="password2" tabindex="3" name="password2" id="password2" type="password" class="text" value=""/>
            
            <label for="email">Email(<span id="req-email" class="requisites">Escriba un email válido, por favor</span>):</label>
            <input tabindex="4" name="email" id="email" type="text" class="text" value=""/>
            <div>
            	<input tabindex="6" name="send" id="send" type="submit"
 class="submit" value="Enviar formulario"/>
             </div>
            
            </form>
 
    </div><!-- end .section -->
</div><!-- end .wrapper -->
</body>
</html>