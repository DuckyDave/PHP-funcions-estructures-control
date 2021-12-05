<?php
    function preuTrucada (int $durada) {
        $cost = 10;
        if ($durada >= 3) {
            $cost += (($durada - 3) * 5);
        }
        return $cost;
    }
    
    function imprimirText($cost) {
        echo ("Cost de la trucada: ");
        if ($cost < 100) {
            echo ($cost . " centims" . "\n");
        } else {
            echo ($cost / 100 . " euro(s)" . "\n");
        }
    }

    /* si el nombre de parametres es igual a 3 ("Nivell 2/Exercici2.php" 2 45) i els segons no passen de 59 */
    if ($argc == 3 && $argv[2] <= 59) {
        // arrodonim la durada al minut sencer seguent
        $durada = $argv[1] + 1;  
        imprimirText(preuTrucada($durada));
    /* si el nombre de parametres es igual a 2 ("Nivell 2/Exercici2.php" 6) */
    } else if ($argc == 2) {
        // durada en minuts exactes
        $durada = $argv[1];
        imprimirText(preuTrucada($durada));
    /* en cas d'error avisem per pantalla */
    } else {
        echo ("Per calcular el cost de la trucada s'ha d'indicar la seva durada en minuts i segons separats per un espai en blanc. " ."\n");
        echo ("Per exemple: php \"Nivell 2/Exercici2.php\" 3 48" . "\n");
    }
?>