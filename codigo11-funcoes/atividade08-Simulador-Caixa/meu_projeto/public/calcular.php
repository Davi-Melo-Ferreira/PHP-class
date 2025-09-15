<?php

function calcular($number) {
    $cedulas = [100, 50, 20, 10, 5];
    $usadas = [];
    foreach ($cedulas as $ced) {
        $usadas[$ced] = 0;
        while ($number >= $ced) {
            $number -= $ced;
            $usadas[$ced]++;
        }
    }
    echo "Cédulas usadas:<br>";
    foreach ($usadas as $ced => $qtd) {
        if ($qtd > 0) {
            echo "$qtd x R$ $ced<br>";
        }
    }
    echo "<p>Valor Não Trocado: $" . $number . "</p>";
}
?>