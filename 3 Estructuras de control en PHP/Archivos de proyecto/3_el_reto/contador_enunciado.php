<?php

//abrimos el archivo visitas.txt
$recurso = fopen('visitas.txt','r+');

$nb_visitas = fgets($recurso); //Lectura de la primera línea que contiene el número de páginas visitadas

if($nb_visitas == ""){ //comprueba si el archivo todavía está vacío
	$nb_visitas = 0;
}

$nb_visitas++; //aumentamos el número de visitas en uno cada vez que se ejecuta este archivo

fseek($recurso, 0); //conseguimos ir al principio del archivo

fputs($recurso, $nb_visitas); //escribimos el nuevo número de páginas visitadas

fclose($recurso);//cierre del archivo

echo 'Se ha visitado esta página '.$nb_visitas.' veces.';



?>