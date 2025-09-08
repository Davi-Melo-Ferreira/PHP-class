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
    echo "Vogal A: $a<br>";
    echo "Vogal E: $e<br>";
    echo "Vogal I: $i<br>";
    echo "Vogal O: $o<br>";
    echo "Vogal U: $u<br>";
}
?>