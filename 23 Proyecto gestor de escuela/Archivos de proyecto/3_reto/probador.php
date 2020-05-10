<?

require("Persona.php");
require("Alumno.php");
require("Profesor.php");
require("Fecha.php");



//$persona = new Persona('012345678A','Javier','Fernández de Pablo','Calle Soria, 25',$fecha->toString());
//print $persona->toString();

$fecha_alumno = new Fecha(9,12,1999);

$alumno = new Alumno('99999999B','Laura','Gutiérrez Mas','Calle Lorca, 23, 2º',$fecha_alumno->toString(),'Matemáticas');

//print $alumno->toString();


$fecha_profesor = new Fecha(10,12,1973);

$profesor = new Profesor('12345678','Alfonso','García Quijano','Segovia, 26',$fecha_profesor->toString(),'0123-4000-34-12345678901');

//print '<br/>';
//print $profesor->toString();

$profesor->setCC('0123-4000-43-12345678901');

//print '<br/>';
//print $profesor->toString();

//Calculamos la edad almuno
$fecha_inglesa = $fecha_alumno->formatea($fecha_alumno);
$edad_alumno = $fecha_alumno->calculaEdad($fecha_inglesa);



//Recopilamos los Datos del Alumno
$nombre_alumno = $alumno->getName();
$apellidos_alumno = $alumno->getSurname();
$nif_alumno = $alumno->getNif();
$direccion_alumno = $alumno->getAddress();
$nacimiento_alumno = $alumno->getBirthdate();
$aula = $alumno->getClase();

//Recopilamos los Datos del Profesor
$nombre_profesor = $profesor->getName();
$apellidos_profesor = $profesor->getSurname();
$nif_profesor = $profesor->getNif();
$direccion_profesor = $profesor->getAddress();
$nacimiento_profesor = $profesor->getBirthdate();
$cc = $profesor->getCC();

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Escuela Los Megacursos</title>
<style>
*{
	margin:0;
	padding:0;
}
body{
	background:rgba(219,219,219,1.00);
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
section{
	width:500px;
	margin:50px auto;
	padding:1em;
	box-sizing:border-box;
	background:#fff;
	border:3px solid grey;
}
article{
	width:100%;
	margin:20px 0 0 0;
	background:rgba(242,214,178,1.00);
	border:1px solid orange;
	color: #000000;
	padding:1em;
	box-sizing:border-box;
}
h1{
	font-size:1.2em;
	font-weight:normal;
	text-align:center;
}
ul{
	list-style:none;
}
ul li{
	margin:10px 0 0 0;
	border-bottom:1px solid #BD7426;
	padding-bottom:5px;
	text-align:right;
}
ul li:first-child{
	border-top:1px solid #BD7426;
	padding-top:5px;
}
ul li span{
	width:53%;
	float:right;
	font-weight:bold;
	text-align:left;
	margin-left:3%;
	}
</style>
</head>

<body>
<section>
	<article>
    	<h1>Profesor</h1>
        <ul>
        	<li>Nombre: <span><?=$nombre_profesor.' '.$apellidos_profesor?></span></li>
            <li>NIF: <span><?=$nif_profesor?></span></li>
            <li>Dirección: <span><?=$direccion_profesor?></span></li>
            <li>Fecha de nacimiento: <span><?=$nacimiento_profesor?></span></li>
           
            <li>Cuenta Corriente: <span><?=$cc?></span></li>
        </ul>
    </article>
    <article>
    	<h1>Alumno</h1>
        <ul>
        	<li>Nombre: <span><?=$nombre_alumno.' '.$apellidos_alumno?></span></li>
            <li>NIF: <span><?=$nif_alumno?></span></li>
            <li>Dirección: <span><?=$direccion_alumno?></span></li>
            <li>Fecha de nacimiento: <span><?=$nacimiento_alumno?></span></li>
             <li>Edad: <span><?=$edad_alumno?></span></li>
            <li>Clase: <span><?=$aula?></span></li>
        </ul>
    </article>
</section>
</body>
</html>






