<?php
    function olympicsYearsList ($year1 = 1960, $year2 = 2016) {
        for ($i = $year1; $i <= $year2; $i += 4) {
            echo ("Any Olimpic: " . $i . "\n");
        }
    }

    echo ("Llistat dels anys en que es van fer Jocs Olimpics des del 1960 fins el 2016" . "\n");
    olympicsYearsList();
?>