<?
session_start();




function menu($subasta){
	if($subasta == 'si'){
	$menu = '<ul>
			<li><strong>DATOS PERSONALES</strong></li>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="cambiar_login.php">Cambiar Contraseña</a></li>
			<li><a href="editar_datos.php">Editar Datos</a></li>
			<li class="ultimo"><a href="logout.php">Cerrar la Sesión</a></li>
			<li><strong>SUBASTAS</strong></li>
			<li><a href="catalogos.php">Subasta en Curso</a></li>
			<li>Alta Vehículos</li>
			<li class="ultimo">Baja Vehículos</li>
			<li><strong>HISTORIAL</strong></li>
			<li><a href="mis_cotizaciones.php">Mis Cotizaciones</a></li>
			<li class="ultimo"><a href="mis_vehiculos.php">Vehículos Ganados</a></li>
			<li><strong>AYUDA</strong></li>
			<li><a href="faq.php">Preguntas Frecuentes</a></li>
			<li class="ultimo"><a href="ayuda.php">Formulario Ayuda</a></li>
			</ul>';
	}else{
		$menu = '<ul>
			<li><strong>DATOS PERSONALES</strong></li>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="cambiar_login.php">Cambiar Contraseña</a></li>
			<li><a href="editar_datos.php">Editar Datos</a></li>
			<li class="ultimo"><a href="logout.php">Cerrar la Sesión</a></li>
			<li><strong>SUBASTAS</strong></li>
			<li>Subasta en Curso</li>
			<li><a href="alta_vehiculos.php">Alta Vehículos</a></li>
			<li class="ultimo"><a href="baja_vehiculos.php">Baja Vehículos</a></li>
			<li><strong>HISTORIAL</strong></li>
			<li><a href="mis_cotizaciones.php">Mis Cotizaciones</a></li>
			<li class="ultimo"><a href="mis_vehiculos.php">Vehículos Ganados</a></li>
			<li><strong>AYUDA</strong></li>
			<li><a href="faq.php">Preguntas Frecuentes</a></li>
			<li class="ultimo"><a href="ayuda.php">Formulario Ayuda</a></li>
			</ul>';
	}
		
	return $menu;
}
?>