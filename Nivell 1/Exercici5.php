<?php
function calculaGrau($numero) {
    $missatge = "";
    if ($numero < 33/100){
        $missatge = "Repovat";
    } elseif ($numero <= 44/100) {
        $missatge = "Tercera Divisió";
    } elseif ($numero <= 59/100) {
        $missatge = "Segona Divisió";
    } else {
        $missatge = "Primera Divisió";
    }

    return ($missatge . "\n");
}

/* si el nombre de paràmetres es igual a 2 (Exercic1.php nota) i la nota es un numero major o igual que 0 */
if ($argc == 2 && $argv[1] >= 0) {
    $nota = $argv[1];
    echo (calculaGrau($nota));
/* en cas contrari ens avisa per pantalla*/
} else {
    echo "Per executar la evaluacio has de has de introduir una nota (major o igual que 0) separada per un espai" . "\n";
    echo "Per exemple: php Exercici5.php 9.5" . "\n";
}

?>