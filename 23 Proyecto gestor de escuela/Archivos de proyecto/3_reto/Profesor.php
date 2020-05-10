<?

class Profesor extends Persona
{
	//representa la Cuenta Corriente
	private $CC;
	
	function __construct($nif,$name,$surname,$address,$birthdate,$CC){
		parent::__construct($nif,$name,$surname,$address,$birthdate);
		$this->CC = $CC;
	}
	
	public function setCC($CC){
		$this->CC = $CC;
	}
	
	public function getCC(){
		return $this->CC;
	}
	
	public function toString(){
		$resultado = parent::toString();
		$resultado .= 'Cuenta Corriente: '.$this->CC.'<br/>';
		return $resultado;
	}
	
}

?>






