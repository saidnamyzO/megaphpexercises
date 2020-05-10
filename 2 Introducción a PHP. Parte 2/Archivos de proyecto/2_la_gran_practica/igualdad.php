<?php

$numero1 = 11;
$numero2 = 11.0;

//Comparo solamente el valor
if($numero1 == $numero2){
	echo "El ".$numero1." y el ".$numero2." <strong>son</strong> iguales";
}else{
	echo "El ".$numero1." y el ".$numero2." <strong>no son</strong> iguales";
}

echo "<br/>";

//Comparo el valor y el tipo de dato
if($numero1 === $numero2){
	echo "El ".$numero1." y el ".$numero2." <strong>son</strong> iguales";
}else{
	echo "El ".$numero1." y el ".$numero2." <strong>no son</strong> iguales";
}

echo "<br/>";
echo "<strong>Veamos ahora las diferencias</strong>";
echo "<br/>";

//La diferencia
$numero = 11;
$cadena = "11";

//Diferencia solo el valor de dos elementos
if($numero != $cadena){
	echo "El ".$numero." y el ".$cadena." <strong>son</strong> diferentes";
}else{
	echo "El ".$numero." y el ".$cadena." <strong>no son</strong> diferentes";
}

echo "<br/>";

//Diferencias el valor y el tipo de dos elementos
if($numero !== $cadena){
	echo "El ".$numero." y el ".$cadena." <strong>son</strong> diferentes";
}else{
	echo "El ".$numero." y el ".$cadena." <strong>no son</strong> diferentes";
}



?>