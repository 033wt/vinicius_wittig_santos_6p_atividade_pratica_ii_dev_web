<?php
$frutas = [];

for ($i = 1; $i <= 5; $i++) {
    echo "Digite a fruta $i: ";
    $fruta = trim(fgets(STDIN));
    $frutas[] = $fruta;
}

sort($frutas);

echo "\nFrutas em ordem alfabética:\n";
foreach ($frutas as $f) {
    echo "- $f\n";
}