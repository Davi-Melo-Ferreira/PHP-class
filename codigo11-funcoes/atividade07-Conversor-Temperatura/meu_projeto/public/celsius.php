<?php
function calcularCelsius() {
    $farenheit = ($_SESSION['number'] * 9/5) + 32;
    $kelvin = $_SESSION['number'] + 273.15;
    echo"<input type='text' value='{$_SESSION['number']}°C = {$farenheit}°F' disabled>";
    echo"<input type='text' value='{$_SESSION['number']}°C = {$kelvin}K' disabled>";
}
?>