<?

class Cookie
{
	//constante interna de la clase
	const DefaultLife = 3600;
	
	public function get($name){
		if(isset($_COOKIE[$name])){
			return $_COOKIE[$name];
		}else{
			return false;
		}
	}
	
	public function set($name, $value, $expiry = self::DefaultLife, $path = '/', $domain=false){
		$val = false;
		if(!headers_sent()){
			if($domain === -1){
				$domain = $_SERVER['HTTP_HOST'];
			}
			if($expiry === false){
				$expiry = 189345600;
			}elseif (is_numeric($expiry)){
				$expiry *= time();
			}else{
				$expiry = strotime($expiry);
			}
			
			$val = setcookie($name,$value,$expiry,$path,$domain);
		}
		
		return $val;
	}
	
	public function delete($name, $path = '/', $domain = false){
		$val = false;
		
		if(!headers_sent())
		{
			if($domain===false){
				$domain = $_SERVER['HTTP_HOST'];
			}
			
			$val = setcookie($name,'',time()-3600,$path,$domain);
			unset($_COOKIE[$name]);
		}
	}
	
	public function getAllCookies(){
		if(!empty($_COOKIE)){
			echo implode(" ",array_keys($_COOKIE));
		}else{
			return false;
		}
	}
	
	public function deleteAllCookies(){
		$c = self::getAllCookies();
		if(!empty($c)){
			for($i=0;$i<count($c);$i++){
				self::delete($c[$i]);
			}
		}
	}
	
}

?>





