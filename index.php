<?php
$matriz1 = [];
$matriz2 = [];
$resultado = [];

echo "Preencha a primeira matriz (3x3):\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "Matriz1[$i][$j]: ";
        $matriz1[$i][$j] = intval(fgets(STDIN));
    }
}

echo "Preencha a segunda matriz (3x3):\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "Matriz2[$i][$j]: ";
        $matriz2[$i][$j] = intval(fgets(STDIN));
        $resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
    }
}

echo "\nMatriz Resultante (Soma):\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $resultado[$i][$j] . "\t";
    }
    echo "\n";
}