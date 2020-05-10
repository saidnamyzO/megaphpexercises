<?

class Viajes
{
	private $nombre;
	private $autobus;
	private $conductor;
	private $fecha;
	private $capacidad;
	
	function __construct($nombre,$autobus,$conductor,$fecha,$capacidad){
		$this->nombre = $nombre;
		$this->autobus = $autobus;
		$this->conductor = $conductor;
		$this->fecha = $fecha;
		$this->capacidad = $capacidad;
	}
	
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	
	public function getNombre(){
		return $this->nombre;
	}
	
	public function setAutobus($autobus){
		$this->autobus = $autobus;
	}
	
	public function getAutobus(){
		return $this->autobus;
	}
	
	public function setConductor($conductor){
		$this->conductor = $conductor;
	}
	
	public function getConductor(){
		return $this->conductor;
	}
	
	public function setFecha($fecha){
		$this->fecha = $fecha;
	}
	
	public function getFecha(){
		return $this->fecha;
	}
	
	public function toString(){
		$resultado = 'Nombre: '.$this->nombre;
		$resultado .= '<br/>';
		$resultado .= 'Autobús: '.$this->autobus;
		$resultado .= '<br/>';
		$resultado .= 'Conductor: '.$this->conductor;
		$resultado .= '<br/>';
		$resultado .= 'Fecha: '.$this->fecha;
		$resultado .= '<br/>';
	}
	
	public function darDeAlta(){
		$consulta = "INSERT INTO viajes (nombre,autobus,conductor,fecha,capacidad) VALUES ('".$this->nombre."','".$this->autobus."','".$this->conductor."','".$this->fecha."','".$this->capacidad."')";
		return $consulta;
	}
	
	
}

?>