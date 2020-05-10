<?
include("MarcaAgua.php");
$nombre1 = 'foto1.png';
$nombre2 = 'foto2.png';
$nombre3 = 'foto3.png';
$marca_agua = 'Moises - Copyright '.date("Y");
$img1 = new MarcaAgua('mariposa.jpg',$marca_agua,$nombre1);
$img2 = new MarcaAgua('mariposa2.jpg',$marca_agua,$nombre2);
$img3 = new MarcaAgua('mariposa3.jpg',$marca_agua,$nombre3);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Práctica con Clase Marca de Agua</title>
<style>
	*{
		margin:0;
		padding:0;
	}
	body{
		background:rgba(144,202,126,1.00);
	}
	section{
		max-width:800px;
		width:800%;
		background:rgba(226,244,180,1.00);
		padding:1em;
		box-sizing:border-box;
		border:5px solid #000;
		margin:100px auto;
		min-height:220px;
	}
	article{
		width:32.5%;
		margin-right:0.8%;
		box-sizing:border-box;
		background:#000;
		height:171px;
		padding:3px;
		float:left;
	}
	article:last-child{
		margin-right:none;
	}
	article img{
		width:100%;
		
		min-height:165px;
	}
</style>
</head>

<body>
<section>
	<article>
    	<img src="<?= $nombre1 ?>" alt="Mariposa 1"/>
    </article>
    <article>
    	<img src="<?= $nombre2 ?>" alt="Mariposa 2"/>
    </article>
    <article>
    	<img src="<?= $nombre3 ?>" alt="Mariposa 3"/>
    </article>
</section>

</body>
</html>