<?php
function compteEnrere($num) {
    for ($i = 2; $i <= $num; $i += 2) {
        echo $i . "\n";
    }
}

/* si el nombre de paràmetres es igual a 2 (Exercic1.php numero) */
if($argc == 2) {
    $numero = $argv[1];
    compteEnrere($numero);
/* en cas contrari ens avisa per pantalla*/
} else {
    echo "Per executar el compte enrere has de introduir un numero enter separat per un espai" . "\n";
    echo "Per exemple: php Exercici1.php 26" . "\n";
}
?>