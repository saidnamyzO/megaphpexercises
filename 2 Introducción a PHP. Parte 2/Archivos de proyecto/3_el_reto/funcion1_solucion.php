<?php

function calculo_iva($precio_bruto,$iva){
	$total_iva = $precio_bruto*($iva/100);
	echo $precio_bruto + $total_iva;
}

echo calculo_iva(2000,10)." Euros";

?>