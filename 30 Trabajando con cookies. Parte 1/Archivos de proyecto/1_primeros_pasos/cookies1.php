<?

setcookie("idioma","spanish");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

//setcookie("tipografia","Arial",time() + 3600);

setcookie("tipografia","Arial",time() - 3600);

?>