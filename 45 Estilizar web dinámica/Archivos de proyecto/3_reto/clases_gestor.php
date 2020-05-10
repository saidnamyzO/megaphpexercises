<?php
class Cabecera{
	private $titulo;
	public function __construct($tit){
		$this->titulo = $tit;
	}
	public function graficar(){
		echo '<header>';
		echo '<h1>'.$this->titulo.'</h1>';
		echo '</header>';
	}
}
class Cuerpo{
	private $lineas = array();
	public function insertarParrafo($li){
		$this->lineas[] = $li;
	}
	public function graficar(){
		echo '<section>';
		for($f=0;$f<count($this->lineas);$f++){
			echo'<p>'.$this->lineas[$f].'</p>';
		}
		echo '</section>';
	}
}
class Pie{
	private $titulo;
	public function __construct($tit){
		$this->titulo = $tit;
	}
	public function graficar(){
		echo '<footer>';
		echo '<p>'.$this->titulo.'</p>';
		echo '</footer>';
	}
}
class Pagina{
	private $cabecera;
	private $pie;
	private $cuerpo;
	public function __construct($texto1,$texto2){
		$this->cabecera = new Cabecera($texto1);
		$this->cuerpo = new Cuerpo();
		$this->pie = new Pie($texto2);
	}
	
	public function insertarCuerpo($texto){
		$this->cuerpo->insertarParrafo($texto);
	}
	
	public function graficar(){
		$this->cabecera->graficar();
		$this->cuerpo->graficar();
		$this->pie->graficar();
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mi Web Dinámica</title>
<style>
*{
	margin:0;
	padding:0;
}
body{
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
header{
	widht:100%;
	text-align:center;
	background:rgba(79,79,79,1.00);
	border-bottom:rgba(183,183,183,1.00) 5px solid;
}
header h1{
	font-size:2em;
	padding:2em 0;
	color:#fff;
	font-weight:lighter;
}
section{
	width:60%;
	margin:0 auto;
	
}
footer{
	position:fixed;
	bottom:0;
	padding:2em;
	background:rgba(79,79,79,1.00);
	color:#fff;
	font-size:1em;
	width:100%;
}
footer p{
	text-align:center;
}
</style>
</head>

<body>
<?
$pagina1 = new Pagina('Mi web dinámica','Aviso Legal. Copyright 2036');

$pagina1->insertarCuerpo('Mensaje de prueba para la web. Bla bla bla bla');
$pagina1->insertarCuerpo('Mensaje de prueba para la web. Bla bla bla bla');
$pagina1->insertarCuerpo('Mensaje de prueba para la web. Bla bla bla bla');
$pagina1->insertarCuerpo('Mensaje de prueba para la web. Bla bla bla bla');

$pagina1->graficar();
?>
</body>
</html>