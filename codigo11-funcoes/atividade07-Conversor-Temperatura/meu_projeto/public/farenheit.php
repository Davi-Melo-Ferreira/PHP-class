<?php
function calcularFarenheit() {
    $celsius = ($_SESSION['number'] - 32) * 5/9;
    $kelvin = ($celsius + 273.15);
    echo"<input type='text' value='{$_SESSION['number']}°F = {$celsius}°C' disabled>";
    echo"<input type='text' value='{$_SESSION['number']}°F = {$kelvin}K' disabled>";
}
?>