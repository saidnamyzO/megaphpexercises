<?

class DBMsSql extends BaseDeDatos
{
	protected $conexion;
	
	public function __construct($servidor,$usuario,$password,$db,$puerto=3306){
		parent::__construct($servidor,$usuario,$password,$db,$puerto,'mssql');
		$this->conexion = mssql_connect($this->servidor.':'.$this->puerto,$this->usario,$this->password);
		mssql_select_db($this->db);
	}
	
	public function setQuery($query){
		//$query = mysql_real_escape_string($query);
		return $this->idConsulta = mssql_query($query);
	}
	
	public function queryToArray(){
		return mssql_fetch_assoc($this->idConsulta);
	}
	
	public function __destruct(){
		mssql_close($this->conexion);
	}
	
	public function verConfiguracion(){
		parent::verConfiguracion();
	}
	
	public function consulta($consulta){
		$this->conexion('localhost','root','','bus',3306);
		$this->setQuery($consulta);
	}
	
}

?>