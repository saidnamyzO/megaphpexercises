<?
include("MarcaAgua.php");
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
    	<img src="mariposa.jpg" alt="Mariposa 1"/>
    </article>
    <article>
    	<img src="mariposa2.jpg" alt="Mariposa 2"/>
    </article>
    <article>
    	<img src="mariposa3.jpg" alt="Mariposa 3"/>
    </article>
</section>
<?
$img = new MarcaAgua('mariposa.jpg','Moisés'.date("Y").'-Copyright');
?>
<img src="image.png"/>
</body>
</html>