<?

//definimos los valores iniciales
$mes = date("n");
$anio = date("Y");
$diaActual = date("j");

//Calcular el primer día de la seman
$diaSemana = date("w",mktime(0,0,0,$mes,1,$anio));
//Calcular el último día del mes
$ultimoDiaMes = date("d",(mktime(0,0,0,$mes+1,1,$anio)-1));

$meses = array (1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mi Calendario</title>
<style>
	*{
		margin:0;
		bottom:0;
	}
	body{
		font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	#calendario{
		font-size:1em;
	}
	#calendario caption{
		text-align:left;
		padding:5px 10px;
		background:rgba(19,163,76,1.00);
		color:#fff;
	}
	#calendario th{
		background-color: rgba(221,238,190,1.00);
		color:rgba(18,133,79,1.00);
		width:40px;
		font-weight:lighter;
	}
	#calendario td{
		text-align:right;
		padding:2px 5px;
		background-color:silver;
	}
	#calendario .hoy{
		background-color:rgba(241,180,110,1.00);
	}
</style>
</head>

<body>
<h1>Mi calendario PHP</h1>
<table id="calendario">
	<caption><?php echo $meses[$mes].' '.$anio?></caption>
    <tr>
    	<th>Lun</th><th>Mar</th><th>Mier</th><th>Jue</th><th>Vie</th><th>Sáb</th><th>Dom</th>
    </tr>
    <tr>
    <?
		
		$last_cell = $diaSemana+$ultimoDiaMes;
		for($i=1;$i<=42;$i++){
			
			if($i==$diaSemana){
				//establecemos el día que empieza
				$day = 1;
			}
			
			if($i<$diaSemana || $i>=$last_cell){
				echo "<td>&nbsp;</td>";
			}else{
				if($day == $diaActual){
					echo "<td class='hoy'>$day</td>";
				}else{
					echo "<td>$day</td>";	
				}
				$day++;
			}
				//cuando llega al final de la semana, iniciamos una columna nueva
				if($i%7==0){
					echo "</tr><tr>\n";
				}
			
			
		}
	
	?>
    </tr>
</table>
</body>
</html>








