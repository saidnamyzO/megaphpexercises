<?php
header("Content-Type: image/png");
$im = @imagecreate(200, 30);
$color_fondo = imagecolorallocate($im, 0, 153, 255);
$color_texto = imagecolorallocate($im, 255, 255, 255);
imagestring($im, 10, 5, 5, "info@megacursos.com", $color_texto);
imagepng($im);
imagedestroy($im);
?>
