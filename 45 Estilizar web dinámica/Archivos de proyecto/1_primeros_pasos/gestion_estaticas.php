<?php 

require_once('Estaticas.php');

$estatica = new Estaticas();

if(!$estatica->estatizar('https://www.google.es/','google.html')){
	die('error al estatizar la web');
}else{
	echo 'pagina estatizada correctamente';
}

?>