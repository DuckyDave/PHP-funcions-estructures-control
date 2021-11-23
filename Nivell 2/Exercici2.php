<?php
    function preuTrucada (int $durada) {
        $cost = 10;
        if ($durada >= 180) {
            $cost += (($durada - 180) * 3);
        }
        return $cost;
    }

    function segonsTotals(int $minuts, int $segons) {
        $segonsTotals = (60 * $minuts) + $segons;
        return $segonsTotals;
    }

    function imprimirText($cost) {
        echo ("Cost de la trucada: ");
        if ($cost < 100) {
            echo ($cost . " centims" . "\n");
        } else {
            echo ($cost / 100 . " euro(s)" . "\n");
        }
    }

    /* si el nombre de paràmetres es igual a 3 (Exercic2.php 2 45) i els segons no passen de 59 */
    if ($argc == 3 && $argv[2] <= 59) {
        /* la durada es converteix a segons */
        $durada = segonsTotals($argv[1], $argv[2]);
        imprimirText(preuTrucada($durada));
    /* si el nombre de paràmetres es igual a 2 (Exercic2.php 6) */
    } else if ($argc == 2) {
        /* la durada es converteix en segons */
        $durada = segonsTotals($argv[1], 0);
        imprimirText(preuTrucada($durada));
    /* en cas d'error avisem per pantalla */
    } else {
        echo ("Per calcular el cost de la trucada s'ha d'indicar la seva durada en minuts i segons" ."\n");
        echo ("Per exemple: php Exercici2.php 3 48". "\n");
    }
?>