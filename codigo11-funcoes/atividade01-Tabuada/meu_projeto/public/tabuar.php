<?php
function tabuar ($number){
    for ($i = 1; $i < 11; $i++){
        $resultado = $number * $i;
        echo "<p>$number x $i = $resultado</p>";
    }
}
?>