<?php

require("clientes.php");

//Creamos un nuevo objeto y mostrams los clientes

$cliente = new Clientes('12345678A','info@losmegacursos.com');

print_r('DNI: '.$cliente->verDNI());
print_r('Email: '.$cliente->verEmail());


?>






