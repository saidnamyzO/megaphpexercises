<?php
$img_number = imagecreate(325,25);
$backcolor = imagecolorallocate($img_number,0,153,255);
$textcolor = imagecolorallocate($img_number,255,255,255);
imagefill($img_number,0,0,$backcolor);
$number = " Tu direccion IP es: $_SERVER[REMOTE_ADDR]";
Imagestring($img_number,10,5,5,$number,$textcolor);
header("Content-type: image/jpeg");
imagejpeg($img_number);
?>

