<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');


	
//Consultar USARIOS
function getUsuarios(){
	$usuarios = mysql_query("SELECT * FROM usuarios");
	
	$resultado ='<table>
				  <tr>
				  	<td><strong>ID</strong>
					<td><strong>NOMBRE</strong>
					<td><strong>APELLIDOS</strong>
					<td><strong>USUARIO</strong>
					<td><strong>CONTRASEÑA</strong>
					<td><strong>EMAIL</strong>
					<td><strong>TELÉFONO</strong>
					<td><strong>NIVEL</strong>
				  </tr>';
	
	while($fila = mysql_fetch_array($usuarios)){
		
	$resultado .='<tr>
					<td>'.$fila['id'].'</td>
					<td>'.$fila['nombre'].'</td>
					<td>'.$fila['apellidos'].'</td>
					<td>'.$fila['user'].'</td>
					<td>'.$fila['pass'].'</td>
					<td>'.$fila['email'].'</td>
					<td>'.$fila['telefono'].'</td>
					<td>'.$fila['nivel'].'</td>
				  </tr>';	
	}
	
	$resultado .='</table>';
	return $resultado;
}
//fin function getUsuarios()



?>











