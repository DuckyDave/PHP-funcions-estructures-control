<?php
function compteEnrere($num = 10) {
    for ($i = 2; $i <= $num; $i += 2) {
        echo $i . "<br>";
    }
}

compteEnrere();
?>