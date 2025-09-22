<?php
function areaQuadrado($lado) {
    return $lado * $lado;
}

function areaRetangulo($base, $altura) {
    return $base * $altura;
}

function areaCirculo($raio) {
    return pi() * pow($raio, 2);
}

echo "Escolha a figura (1-Quadrado, 2-Retângulo, 3-Círculo): ";
$opcao = intval(fgets(STDIN));

switch ($opcao) {
    case 1:
        echo "Digite o lado do quadrado: ";
        $lado = floatval(fgets(STDIN));
        echo "Área do quadrado: " . areaQuadrado($lado) . "\n";
        break;

    case 2:
        echo "Digite a base: ";
        $base = floatval(fgets(STDIN));
        echo "Digite a altura: ";
        $altura = floatval(fgets(STDIN));
        echo "Área do retângulo: " . areaRetangulo($base, $altura) . "\n";
        break;

    case 3:
        echo "Digite o raio: ";
        $raio = floatval(fgets(STDIN));
        echo "Área do círculo: " . areaCirculo($raio) . "\n";
        break;

    default:
        echo "Opção inválida.\n";
}