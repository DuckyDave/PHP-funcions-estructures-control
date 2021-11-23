<?php
    declare(strict_types=1);    //declarem de forma estricta les variables segon el tipus dades que contenen
    error_reporting(E_ALL);     //repotem tots els errors
    
    //funcio que genera la factura de la compra
    function imprimeixFactura(array $carroCompra) {
        //creem un Array amb els productes i un altre amb els seus preus per unitat
        $PRODUCTES = array('xocolata', 'xiclets', 'caramels');
        $PREUS = array(1.00, 0.50, 1.50);
        //generem la factura de la compra
        imprimirTextSubtotals($carroCompra, $PRODUCTES);
        imprimirImportsCompra($carroCompra, $PREUS);
        echo ("\n" . "Total, ". calcularTotal($carroCompra, $PREUS) . "\n");
    }

    //funcio que imprimeix el text "Subtotal" per a cada producte
    function imprimirTextSubtotals(array $quantitats, array $productes) {
        for ($i = 0; $i < count($quantitats); $i++) {
            echo ("Subtotal (" . $quantitats[$i] . " de " .  $productes[$i] . ")");
            operadors(true, $i, $quantitats);
        }
    }
    
    //funcio que imprimeix el subtotal calculat per a cada producte
    function imprimirImportsCompra(array $quantitats, array $preus) {
        for ($i = 0; $i < count($quantitats); $i++) {
            echo (calcularSubtotal($quantitats[$i], $preus[$i]));
            operadors(false, $i, $quantitats);
        }
    }

    //funcio que calcula el subtotal per cada producte
    function calcularSubtotal($quantitat, $preu) {
        return $quantitat * $preu;
    }

    //funcio qye calcula el total de la factura
    function calcularTotal(array $quantitats, array $preus) {
        $totalFactura = 0;
        for ($i = 0; $i < count($quantitats); $i++) {
            $totalFactura += calcularSubtotal($quantitats[$i], $preus[$i]);
        }
        return $totalFactura;
    }

    //funcio que imprimeix els signes de "suma"  i "igual" a la pantalla, si s'escau
    function operadors(bool $text, int $numero, array $quantitats) {
        if($text && ($numero == count($quantitats) - 1)) {
            echo " = ";
        } else if(!$text && ($numero == count($quantitats) - 1)) {
            echo "";
        } else {
            echo " + ";
        }
    }

    //creem un Array buit per desar la llista de la compra
    $llistaCompra = array();

    //nombre de paràmetres a la linia de comandament, inclos "php Exercici2.php"
    switch ($argc) {
        case 2:
             //afegim la quantitat de xocolata a comprar al carro de la compra
            array_push($llistaCompra, $argv[1]);
             //generem la factura de compra
            imprimeixFactura($llistaCompra);
            break;
        case 3:
            //afegim la quantitat de xiclets a comprar al carro de la compra
            array_push($llistaCompra, $argv[1], $argv[2]);
            //generem la factura de compra
            imprimeixFactura($llistaCompra);
            break;
        case 4:
            //afegim la quantitat de caramels a comprar al carro de la compra
            array_push($llistaCompra, $argv[1], $argv[2], $argv[3]);
            //generem la factura de compra
            imprimeixFactura($llistaCompra);
            break;
        default:
             /* en cas d'error avisem per pantalla */
            echo ("Per imprimir la factura introdueixi les quantitats de 'xocolata', 'xiclets' i 'caramels' a comprar" . "\n");
            echo ("Per exemple: php Exercici2.php 2 1 1". "\n");
            break;
    }
?>