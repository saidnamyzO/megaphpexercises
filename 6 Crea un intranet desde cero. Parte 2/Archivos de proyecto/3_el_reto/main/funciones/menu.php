<?php

//mostrar el menú del Administrador con variable de sesion $_SESSION['nivel']==1
function getMenuAdministrador(){
	$resultado='
				<nav class="menu">
					<ul>
						<li><a href="index.php" title="Inicio">Inicio</a></li>
						<li><a href="usuarios.php" title="Usuarios">Usuarios</a></li>
						<li><a href="clientes.php" title="Clientes">Clientes</a></li>
					</ul>
				</nav>
	';
	return $resultado;
}

//mostrar el menú del Empleado con variable de sesion $_SESSION['nivel']==2
function getMenuEmpleado(){
	$resultado='
				<nav class="menu">
					<ul>
						<li><a href="index.php" title="Inicio">Inicio</a></li>
						<li><a href="clientes.php" title="Clientes">Clientes</a></li>
					</ul>
				</nav>
	';
	return $resultado;
}


?>











