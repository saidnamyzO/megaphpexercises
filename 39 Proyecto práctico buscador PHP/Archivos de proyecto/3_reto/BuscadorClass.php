<?

class Conectar 
{
	public function con(){
		$conexion = mysql_connect('localhost','root','');
		mysql_select_db('blog');
		return $conexion;
	}
}

class Buscador
{
	private $busqueda = array();
	public function buscar(){
		$query = "SELECT * FROM posts WHERE titulo like '%".$_GET['busqueda']."%' OR cuerpo like '%".$_GET['busqueda']."%';";
		$res = mysql_query($query,Conectar::con());
		while($reg=mysql_fetch_assoc($res))
		{
			$this->busqueda[] = $reg;
		}
			return $this->busqueda;
	}
}

?>