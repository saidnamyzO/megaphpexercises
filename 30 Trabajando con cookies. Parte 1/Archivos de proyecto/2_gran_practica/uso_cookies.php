<?

include("Cookie.php");
$cookie = new Cookie;

//$cookie->set('preferencias','color:azul|font:verdana|header:1.gif',30);


$cookie->set('idioma2','english',30);

$cookie->getAllCookies();

$cookie->deleteAllCookies();



?>