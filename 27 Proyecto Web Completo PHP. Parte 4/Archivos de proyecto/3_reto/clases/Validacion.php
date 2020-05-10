<?

class Validacion
{
	private $error;
	
	//Validación de textos
	public function ValidaTexto($text,$min=false,$max=false,$espacios=true,$mensaje=''){
		if(!empty($min)){
			if(strlen($text) < $min){
				$this->error = $mensaje;
				return $this->error;
			}
		}
		if(!empty($max)){
			if(strlen($text) > $max){
				$this->error = $mensaje;
				return $this->error;
			}
		}
		if($espacios){
			$res = ereg("^[A-Za-z0-9\ ]+$",$text);
		}else{
			$res = ereg("^[A-Za-z0-9\ ]+$",$text);
		}
		
		if($res){
			return true;
		}else{
			$this->error = $mensaje;
				return $this->error;
		}
		
		return true;
	}//FIN Validación de textos
	
}

?>