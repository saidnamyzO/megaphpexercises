<?

class MarcaAgua{
	
	public function __construct($i, $m){
		$dim = getimagesize($i);
		
		if($dim){
			$img = imagecreatetruecolor($dim[0],$dim[1]);
			$img = imagecreatefromjpeg($i);
			$color = imagecolorallocate($img, 255, 255, 255);
			$fuente = 'ArefRuqaa-Bold.ttf';
			imagettftext($img,30,0,$dim[0]/3,$dim[1]/4,$color,$fuente,$m);
			//$image = header("Content-type: image/png");
			imagepng($img, "image.png");
			imagedestroy($img);
		}else{
			return false;
		}
	}
	
}


?>