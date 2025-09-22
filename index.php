<?php
function celsiusParaFahrenheit($c) {
    return ($c * 9/5) + 32;
}

function fahrenheitParaCelsius($f) {
    return ($f - 32) * 5/9;
}

echo "Digite a temperatura: ";
$temp = floatval(fgets(STDIN));

echo "Digite a escala desejada (C para Celsius, F para Fahrenheit): ";
$escala = strtoupper(trim(fgets(STDIN)));

if ($escala == "C") {
    echo "Resultado: " . fahrenheitParaCelsius($temp) . " °C\n";
} elseif ($escala == "F") {
    echo "Resultado: " . celsiusParaFahrenheit($temp) . " °F\n";
} else {
    echo "Escala inválida.\n";
}
