<?

class Conductores
{
	private $nombre;
	private $fnacimiento;
	private $nif;
	private $telefono;
	private $email;
	private $carnet;
	
	function __construct($nombre,$fnacimiento,$nif,$telefono,$email,$carnet){
		$this->nombre = $nombre;
		$this->fnacimiento = $fnacimiento;
		$this->nif = $nif;
		$this->telefono = $telefono;
		$this->email = $email;
		$this->carnet = $carnet;
	}
	
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	
	public function getNombre(){
		return $this->nombre;
	}
	
	public function setFnacimiento($fnacimiento){
		$this->fnacimiento = $fnacimiento;
	}
	
	public function getFnacimiento(){
		return $this->fnacimiento;
	}
	
	public function setNIF($nif){
		$this->nif = $nif;
	}
	
	public function getNIF(){
		return $this->nif;
	}
	
	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}
	
	public function getTelefono(){
		return $this->telefono;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setCarnet($carnet){
		$this->carnet = $carnet;
	}
	
	public function getCarnet(){
		return $this->carnet;
	}
	
	
	public function toString(){
		$resultado = 'Nombre: '.$this->nombre;
		$resultado .= '<br/>';
		$resultado .= 'Fecha Nacimiento: '.$this->fnacimiento;
		$resultado .= '<br/>';
		$resultado .= 'NIF: '.$this->nif;
		$resultado .= '<br/>';
		$resultado .= 'Teléfono: '.$this->telefono;
		$resultado .= '<br/>';
		$resultado .= 'Email: '.$this->email;
		$resultado .= '<br/>';
		$resultado .= 'Carnet: '.$this->carnet;
		$resultado .= '<br/>';
		return $resultado;
	}
	
	public function darDeAlta(){
		$consulta = "INSERT INTO conductores (nombre,fnacimiento,nif,telefono,email,carnet) VALUES ('".$this->nombre."','".$this->fnacimiento."','".$this->nif."','".$this->telefono."','".$this->email."','".$this->carnet."')";
		return $consulta;
	}
	
	
}

?>