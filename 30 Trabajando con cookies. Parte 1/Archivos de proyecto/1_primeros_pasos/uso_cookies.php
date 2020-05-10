<?

include("Cookie.php");
$cookie = new Cookie;

$cookie->set('preferencias','color:azul|font:verdana|header:1.gif',30);

echo '<pre>';
print_r ($_COOKIE);
echo '</pre>';

//$cookie->set('idioma2','english',30);

$cookie->delete('idioma2');

?>