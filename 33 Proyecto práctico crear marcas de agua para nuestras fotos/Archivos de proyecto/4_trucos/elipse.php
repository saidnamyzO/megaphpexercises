<?php

// crear imagen
$imagen = imagecreatetruecolor(100, 100);

// asignar algunos colores
$blanco      = imagecolorallocate($imagen, 0xFF, 0xFF, 0xFF);
$gris        = imagecolorallocate($imagen, 0xC0, 0xC0, 0xC0);
$gris_oscuro = imagecolorallocate($imagen, 0x90, 0x90, 0x90);
$azul_marino = imagecolorallocate($imagen, 0x00, 0x00, 0x80);
$azul_marino_oscuro = imagecolorallocate($imagen, 0x00, 0x00, 0x50);
$rojo        = imagecolorallocate($imagen, 0xFF, 0x00, 0x00);
$rojo_oscuro = imagecolorallocate($imagen, 0x90, 0x00, 0x00);

// hacer el efecto 3D
for ($i = 60; $i > 50; $i--) {
   imagefilledarc($imagen, 50, $i, 100, 50, 0, 45, $azul_marino_oscuro, IMG_ARC_PIE);
   imagefilledarc($imagen, 50, $i, 100, 50, 45, 75 , $gris_oscuro, IMG_ARC_PIE);
   imagefilledarc($imagen, 50, $i, 100, 50, 75, 360 , $rojo_oscuro, IMG_ARC_PIE);
}

imagefilledarc($imagen, 50, 50, 100, 50, 0, 45, $azul_marino, IMG_ARC_PIE);
imagefilledarc($imagen, 50, 50, 100, 50, 45, 75 , $gris, IMG_ARC_PIE);
imagefilledarc($imagen, 50, 50, 100, 50, 75, 360 , $rojo, IMG_ARC_PIE);


// volcar imagen
header('Content-type: image/png');
imagepng($imagen);
imagedestroy($imagen);
?>