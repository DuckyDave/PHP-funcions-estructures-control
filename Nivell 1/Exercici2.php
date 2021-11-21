<?php
function compteEnrere($num) {
    for ($i = 2; $i <= $num; $i += 2) {
        echo $i . "\n";
    }
}
/* $num = 10 */
compteEnrere(10);
?>