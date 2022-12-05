<?php

/* //imprimer en pantalla
print "hola mundo";
echo "hola mundo", " hola php";
//variables
$nombre = "victor";
echo $nombre;
$numero = 3;
echo $numero;
#constanstes
define("curso", "php");
echo curso; */

//condicionales
$numero_uno = 25;
$numero_dos = 25;
if ($numero_uno < $numero_dos) {
    echo 'curso de php';
} elseif ($numero_uno == $numero_dos) {
    echo "numero $numero_uno es igual al numero $numero_dos";
} else {
    echo 'curso de laravel';
}


?>