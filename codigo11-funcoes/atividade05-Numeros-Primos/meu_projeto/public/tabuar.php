<?php
function tabuar ($number){
    for ($i = 0; $i < 10; $i++){
        $resultado = $number * $i;
        echo "$number x $i = $resultado<br>";
    }
}
?>