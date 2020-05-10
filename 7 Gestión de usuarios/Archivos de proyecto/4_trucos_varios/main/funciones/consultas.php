<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');


	
//Consultar USARIOS
function getUsuarios(){
	$usuarios = mysql_query("SELECT * FROM usuarios");
	
	$resultado ='<table>
				  <tr>
				  	<th><strong>ID</strong></th>
					<th><strong>NOMBRE</strong></th>
					<th><strong>APELLIDOS</strong></th>
					<th><strong>USER</strong></th>
					<th><strong>PASS</strong></th>
					<th><strong>EMAIL</strong></th>
					<th><strong>TELÉFONO</strong></th>
					<th><strong>NIVEL</strong></th>
					<th></th>
					<th></th>
				  </tr>';
	
	while($fila = mysql_fetch_array($usuarios)){
		
	$resultado .='<tr>
					<td>'.$fila['id'].'</td>
					<td>'.$fila['nombre'].'</td>
					<td>'.$fila['apellidos'].'</td>
					<td>'.$fila['user'].'</td>
					<td>'.$fila['pass'].'</td>
					<td><a href="mailto:'.$fila['email'].'">'.$fila['email'].'</a></td>
					<td><a href="tel:'.$fila['telefono'].'">'.$fila['telefono'].'</a></td>
					<td>'.$fila['nivel'].'</td>
					<td><a href="editar_usuarios.php?id='.$fila['id'].'" class="enlace_rojo">Editar</a></td>
					<td><a href="borrar_usuarios.php" class="enlace_rojo">Borrar</a></td>
				  </tr>';	
	}
	
	$resultado .='</table>';
	return $resultado;
}
//fin function getUsuarios()



?>











