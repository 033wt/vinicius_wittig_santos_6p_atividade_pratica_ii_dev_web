<?php
$produtos = [];

for ($i = 1; $i <= 4; $i++) {
    echo "Produto $i - Nome: ";
    $nome = trim(fgets(STDIN));

    echo "Quantidade: ";
    $quantidade = intval(fgets(STDIN));

    echo "Preço unitário: ";
    $preco = floatval(fgets(STDIN));

    $total = $quantidade * $preco;

    $produtos[] = [
        "nome" => $nome,
        "quantidade" => $quantidade,
        "preco" => $preco,
        "total" => $total
    ];
}

echo "\nTabela de Produtos:\n";
echo str_pad("Nome", 15) . str_pad("Qtd", 10) . str_pad("Preço", 15) . "Total\n";
echo str_repeat("-", 50) . "\n";

foreach ($produtos as $p) {
    echo str_pad($p["nome"], 15);
    echo str_pad($p["quantidade"], 10);
    echo str_pad(number_format($p["preco"], 2, ",", "."), 15);
    echo number_format($p["total"], 2, ",", ".") . "\n";
}