<?php
function calcular ($word){
    $array = str_split($word);
    [$a,$e,$i,$o,$u,] = [0,0,0,0,0];
    foreach($array as $letra){
        if($letra == "a"){
            $a += 1;
        }elseif($letra == "e"){
            $e += 1;
        }elseif($letra == "i"){
            $i += 1;
        }elseif($letra == "o"){
            $o += 1;
        }elseif($letra == "u"){
            $u += 1;
        }
    }
    $vogais = ['A' => $a, 'E' => $e, 'I' => $i, 'O' => $o, 'U' => $u];
    foreach ($vogais as $vogal => $valor) {
        if ($valor > 0) {
            echo "Vogal $vogal: $valor<br>";
        }
    }
}
?>