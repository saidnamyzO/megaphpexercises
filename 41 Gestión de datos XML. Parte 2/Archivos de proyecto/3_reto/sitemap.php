<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sitemap</title>
<style>
*{
	margin:0;
	padding:0;
}
body{
	background:rgba(242,203,242,1.00);
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
section{
	width:600px;
	margin:0 auto;
	padding:1em;
	box-sizing:border-box;
	background:#fff;
	border-right:2px solid rgba(172,49,197,1.00);
	border-left:2px solid rgba(172,49,197,1.00);
}
h1{
	text-align:center;
	font-size:1.3em;
	color:rgba(172,49,197,1.00);
}
h2, h2 a{
	font-size:1.1em;
	color:rgba(172,49,197,1.00);
	font-weight:normal;
	text-decoration:none;
}
h2 a:hover{
	text-decoration:underline;
}
article{
	margin:20px 0 0 0;
	border-bottom:1px solid rgba(118,118,118,1.00);
	padding-bottom:20px;
}
article:last-child{
	border-bottom:none;
}
article{
	font-size:0.9em;
}
article span{
	font-weight:bold;
}
</style>
</head>

<body>
<section>
<h1>Sitemap</h1>
<?php
	if(!$xml = simplexml_load_file('sitemap.xml')){
		echo 'No se ha podido cargar el XML';
	}else{
		foreach ($xml as $url){
			echo '<article>';
			echo '<h2><a href="'.$url->loc.'">'.$url->titulo.'</a></h2>';
			echo 'Última Modificación: <span> '.$url->lastmode.'</span> | ';
			echo 'Frecuencia: <span> '.$url->changefreq.'</span><br/>';
			echo 'Prioridad: <span> '.$url->priority.'<br/>';
			echo '</article>';
		}
	}
?>
</section>
</body>
</html>