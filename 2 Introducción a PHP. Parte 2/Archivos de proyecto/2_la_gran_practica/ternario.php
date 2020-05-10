<?php

$numero1 = 11;
$numero2 = 12;

echo "COMPARACION CON IF";
echo "<br/>";
//Comparación mediante un bloque IF... ELSE
if($numero1 == $numero2){
	echo $numero1." y ".$numero2." <strong>son</strong> iguales";
}else{
	echo $numero1." y ".$numero2." <strong>no son</strong> iguales";
}

echo "<br/>";
echo "OPERADOR TERNARIO";
echo "<br/>";

//Comparación con estructura --  condición?expresión1:expresión2

echo ($numero1 == $numero2)?$numero1." y ".$numero2." <strong>son</strong> iguales":$numero1." y ".$numero2." <strong>no son</strong> iguales";

?>