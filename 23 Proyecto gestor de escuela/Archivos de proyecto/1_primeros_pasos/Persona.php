<?

class Persona
{
	
	protected $nif;
	protected $name;
	protected $surname;
	protected $address;
	protected $birthdate;
	
	function __construct($nif,$name,$surname,$address,$birthdate){
		$this->nif = $nif;
		$this->name = $name;
		$this->surname = $surname;
		$this->address = $address;
		$this->birthdate = $birthdate;
	}
	
	public function setNif($nif){
		$this->nif = $nif;
	}
	
	public function getNif(){
		return $this->nif;
	}
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setSurname($surname){
		$this->surname = $surname;
	}
	
	public function getSurname(){
		return $this->surname;
	}
	
	public function setAddress($address){
		$this->address = $address;
	}
	
	public function getAddress(){
		return $this->address;
	}
	
	public function setBirthdate($birthdate){
		$this->birthdate = $birthdate;
	}
	
	public function getBirthdate(){
		return $this->birthdate;
	}
	
	public function toString(){
	$resultado = 'Nombre: '.$this->name.' '.$this->surname;
	$resultado .= '<br/>';
	$resultado .= 'NIF: '.$this->nif.'<br/>';
	$resultado .= 'Dirección: '.$this->address.'<br/>';
	$resultado .= 'Fecha de nacimiento: '.$this->birthdate.'<br/>';
	return $resultado;
	}
	
	
}

?>







