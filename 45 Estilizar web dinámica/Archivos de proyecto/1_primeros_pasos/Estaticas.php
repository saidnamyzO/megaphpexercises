<?php

class Estaticas{

public function estatizar($url,$archivo){
	$estatica = file_get_contents($url);
	if(empty($estatica)){
		return false;
	}else{
		$estatica .= '<!-- '.date('d-m-Y H:i:s'). '-->';
	}
	
	$handle = fopen($archivo, 'w+');
	if(!$handle){
		return false;
	}else{
		fwrite($handle, $estatica);
		$handle = fclose($handle);
		return true;
	}
}

}

?>