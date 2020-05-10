<?

function ultimoDia($month,$year){
	$ultimo_dia = 28;
	while(checkdate($month,$ultimo_dia + 1,$year)){
		$ultimo_dia++;
	}
	return $ultimo_dia;
}

function calendar_html(){
	$meses = array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	//$fecha_fin=date('d-m-Y', time());
	$mes = date('m',time());
	$anio = date('Y',time());
	?>
    <!-- Código HTML -->
    <table>
    	<tr>
        	<td colspan="4">
            	<select id="calendar_mes" onChange="update_Calendar()"> 
    <!-- Fin Código HTML -->
    <? 
		$mes_numero = 1;
		while($mes_numero<=12){
			if($mes_numero == $mes){
				echo "<option value=".$mes_numero." selected='selected'>".$meses[$mes_numero-1]."</option>\n";
			}else{
				echo "<option value=".$mes_numero.">".$meses[$mes_numero-1]."</option>\n";
			}
			$mes_numero++;
		}
		?>
         <!-- Código HTML -->
        </select>
       </td>
       <td colspan="3">
       	<select id="calendar_anio" onChange="update_Calendar()">
         <!-- Fin Código HTML -->
        <?
		//años a mostrar
		$anio_min = $anio - 30;
		$anio_max = $anio; //año actual
		while($anio_max >= $anio_min){
			echo "<option value=".$anio_max.">".$anio_max."</option> \n";
			$anio_max--;
		}
		?>
        <!-- Código HTML -->
        </select>
       </td>
      </tr>
      </table>
      <div id="calendario_dias">
      <? calendar($mes,$anio)?>
      </div>
        <!-- Fin Código HTML -->
        <?

}

function calendar($mes,$anio){
	$dia = 1;
	if(strlen($mes)==1) $mes='0'.$mes;
	?>
    <!-- Código HTML -->
    <table>
    	<tr>
        	<td>D</td>
            <td>L</td>
            <td>M</td>
            <td>M</td>
            <td>J</td>
            <td>V</td>
            <td>S</td>
        </tr>    
    <!-- Fin Código HTML -->
    <?
}
?>








