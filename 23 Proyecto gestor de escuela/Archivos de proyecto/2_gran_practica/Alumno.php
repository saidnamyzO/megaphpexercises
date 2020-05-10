<?

class Alumno extends Persona
{
	
	private $clase;
	
	function __construct($nif,$name,$surname,$address,$birthdate,$clase){
		parent::__construct($nif,$name,$surname,$address,$birthdate);
		$this->clase = $clase;
	}
	
	public function setClase($clase){
		$this->clase = $clase;
	}
	
	public function getClase(){
		return $this->clase;
	}
	
	public function toString(){
		$resultado = parent::toString();
		$resultado .= 'Aula: '.$this->clase.'<br/>';
		return $resultado;
	}
	
}

?>






