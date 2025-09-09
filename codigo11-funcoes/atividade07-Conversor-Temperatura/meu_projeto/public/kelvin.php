<?php
function calcularKelvin() {
    $celsius = $_SESSION['number'] - 273.15;
    $farenheit = ($celsius * 9/5) + 32;
    echo"<input type='text' value='{$_SESSION['number']}K = {$celsius}°C' disabled>";
    echo"<input type='text' value='{$_SESSION['number']}K = {$farenheit}°F' disabled>";
}

?>