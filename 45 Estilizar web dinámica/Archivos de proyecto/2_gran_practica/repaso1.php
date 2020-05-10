<?php

class Operacion
{
	protected $valor1;
	protected $valor2;
	protected $resultado;
	
	public function cargar1($v){
		$this->valor1 =$v;
	}
	
	public function cargar2($v){
		$this->valor2 = $v;
	}
	
	public function imprimirResultado(){
		$resultado = $this->resultado;
		return $resultado;
	}
}

class Suma extends Operacion
{
	public function operar(){
		$this->resultado=$this->valor1+$this->valor2;
	}	
}

class Resta extends Operacion
{
	public function operar(){
		$this->resultado=$this->valor1-$this->valor2;
	}
}

class Multiplicacion extends Operacion
{
	public function operar(){
		$this->resultado=$this->valor1*$this->valor2;
	}
}

class Division extends Operacion
{
	public function operar(){
		$this->resultado=$this->valor1/$this->valor2;
	}
}


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Repaso 1</title>
<style>
*{
	margin:0;
	padding:0;
}
body{
	background: rgba(240,182,226,1.00);
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
section{
	width:50%;
	max-width:600px;
	background:#fff;
	border-left:5px solid rgba(255,255,255,0.69);
	border-right:5px solid rgba(255,255,255,0.69);
	padding:2.5em 2em;
	box-sizing:border-box;
	margin:0 auto;
}
h1{
	text-align:center;
	color: rgba(191,27,191,1.00);
	margin:1em 0;
	font-weight:normal;
	font-size:2em;
}
h2{
	text-align:center;
	color: rgba(121,121,121,1.00);
	margin:1em 0;
	font-weight:normal;
}
article{
	width:80%;
	margin:0 auto;
	padding: 1em;
	box-sizing:border-box;
	background: rgba(222,222,222,1.00);
	color: rgba(191,27,191,1.00);
}
article ul{
	list-style:none;
}
article ul li{
	font-size:1.3em;
	margin-bottom:10px;
}
article ul li.solucion{
	background:rgba(191,27,191,1.00);
	color:#fff;
	padding:0.3em;
	box-sizing:border-box;
}
</style>
</head>

<body>
<section>
<h1>Herencias y Operaciones</h1>
<h2>Vamos a Sumar</h2>
<?
$suma = new Suma();
$sumando1 = 10; 
$suma->cargar1($sumando1);
$sumando2 = 10;
$suma->cargar2($sumando2);
$suma->operar();
$resultado = $sumando1.' + '.$sumando2.' = '.$suma->imprimirResultado();
?>
<article>
<ul>
	<li>Operando 1 = <span><?= $sumando1 ?></span></li> 
	<li>Operando 2 = <span><?= $sumando2 ?></span></li>
    <li class="solucion">Resultado = <span><?= $resultado ?></span></li>
</ul>
</article>
<h2>Vamos a Restar</h2>
<?
$resta = new Resta();
$operador1 = 25; 
$resta->cargar1($operador1);
$operador2 = 13;
$resta->cargar2($operador2);
$resta->operar();
$resultado2 = $operador1.' - '.$operador2.' = '.$resta->imprimirResultado();
?>
<article>
<ul>
	<li>Operando 1 = <span><?= $operador1 ?></span></li> 
	<li>Operando 2 = <span><?= $operador2 ?></span></li>
    <li class="solucion">Resultado = <span><?= $resultado2 ?></span></li>
</ul>
</article>
<h2>Vamos a Multiplicar</h2>
<?
$multiplicacion = new Multiplicacion();
$operador1 = 25; 
$multiplicacion->cargar1($operador1);
$operador2 = 13;
$multiplicacion->cargar2($operador2);
$multiplicacion->operar();
$resultado3 = $operador1.' * '.$operador2.' = '.$multiplicacion->imprimirResultado();
?>
<article>
<ul>
	<li>Operando 1 = <span><?= $operador1 ?></span></li> 
	<li>Operando 2 = <span><?= $operador2 ?></span></li>
    <li class="solucion">Resultado = <span><?= $resultado3 ?></span></li>
</ul>
</article>
<h2>Vamos a Dividir</h2>
<?
$division = new Division();
$operador1 = 25; 
$division->cargar1($operador1);
$operador2 = 13;
$division->cargar2($operador2);
$division->operar();
$resultado4 = $operador1.' / '.$operador2.' = '.$division->imprimirResultado();
?>
<article>
<ul>
	<li>Operando 1 = <span><?= $operador1 ?></span></li> 
	<li>Operando 2 = <span><?= $operador2 ?></span></li>
    <li class="solucion">Resultado = <span><?= $resultado4 ?></span></li>
</ul>
</article>
</section>
</body>
</html>





