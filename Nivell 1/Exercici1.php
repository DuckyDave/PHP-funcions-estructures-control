<?php
function esParell($num) {
    $missatge = "El numero " . $num . " es ";
    ($num % 2 == 0) ? $missatge .= "parell\n" : $missatge .= "imparell\n";
    return ($missatge);
}

/* si el nombre de paràmetres es igual a 2 (Exercic1.php numero) */
if($argc == 2){
    $numero = $argv[1];
    print_r(esParell($numero));
/* en cas contrari ens avisa per pantalla*/
} else {
    echo "Per executar el programa has de introduir un numero enter separat per un espai" . "\n";
    echo "Per exemple: php Exercici1.php 157" . "\n";
}
?>