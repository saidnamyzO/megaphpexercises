<?

class Login {
	public function inicia($tiempo=3600, $usuario=NULL, $clave=NULL){
		if($usuario==NULL && $clave=NULL){
			//Verificamos la sesion
			if(isset($_SESSION['idusuario'])){
				echo 'estamos logados';
			}else{
				if(isset($_COOKIE['idusuario'])){
					//Restauramos la sesion
					$_SESSION['idusuario'] = $_COOKIE['idusuario'];
				}else{
					header("Location:index.php");
				}
			}
		} else {
			$this->verifica_usuario($tiempo, $usuario, $clave);
	}
	
}

private function verifica_usuario($tiempo, $usuario, $clave){
	if($usuario=='user' && $clave=='password'){
		$idusuario = $this->codificar_usuario($usuario);
		setcookie("idusuario",$idusuario,time()+$tiempo);
		$_SESSION['idusuario'] = $idusuario;
		header("Location: index2.php");
	}else{
		header("Location: index.php?error=1");
	}
}

private function codificar_usuario($usuario){
	return md5($usuario);
}

}

?>