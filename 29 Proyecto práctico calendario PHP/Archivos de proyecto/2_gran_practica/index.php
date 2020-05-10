<?php
require("calendario.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mi Calendario con Ajax</title>
</head>

<body>
<form id="formulario">
	<label for="fecha">Selecciona la fecha</label>
    <input type="text" name="fecha" id="fecha"/>
    <a onClick="show_calendar()">
    (Calendario)</a>
    <div id="calendario">
    <?php calendar_html()?>
    </div>
</form>
</body>
</html>