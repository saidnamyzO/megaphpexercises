<?

class MarcaAgua{
	
	public function __construct($i, $m, $n){
		$dim = getimagesize($i);
		if($dim){
			$img = imagecreatetruecolor($dim[0],$dim[1]);
			$img = imagecreatefromjpeg($i);
			$color = imagecolorallocate($img, 0, 0, 0);
			$fuente = 'ArefRuqaa-Bold.ttf';
			imagettftext($img,30,0,$dim[0]/4,$dim[1]/10,$color,$fuente,$m);
			//$image = header("Content-type: image/png");
			imagepng($img, $n);
			imagedestroy($img);
		}else{
			return false;
		}
	}
	
}


?>