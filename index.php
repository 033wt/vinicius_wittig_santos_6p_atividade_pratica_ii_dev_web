<?php
$numeros = [];
$pares = [];
$impares = [];

for ($i = 1; $i <= 10; $i++) {
    echo "Digite o número $i: ";
    $num = intval(fgets(STDIN));
    $numeros[] = $num;

    if ($num % 2 == 0) {
        $pares[] = $num;
    } else {
        $impares[] = $num;
    }
}

echo "\nNúmeros pares:\n";
print_r($pares);

echo "\nNúmeros ímpares:\n";
print_r($impares);