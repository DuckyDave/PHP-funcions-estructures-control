<?php
function compteEnrere($num) {
    for ($i = 2; $i <= $num; $i += 2) {
        echo $i . "<br>";
    }
}

/* si el nombre de paràmetres es igual a 1 (Exercic1.php) */
if($argc == 1) {
    compteEnrere(10);
/* en cas contrari ens avisa per pantalla*/
} else {
    echo "Per executar el compte enrere no has d'introduir cap numero separat per espais (el valor per defecte es 10" . "\n";
}
?>