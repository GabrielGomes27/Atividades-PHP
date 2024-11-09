<?php

function calcularDesconto($valorProduto, $percentualDesconto) {

    $desconto = ($valorProduto * $percentualDesconto) / 100;

    $valorFinal = $valorProduto - $desconto;

    return $valorFinal;
}

$valorProduto = 500;
$percentualDesconto = 20;

$valorComDesconto = calcularDesconto($valorProduto, $percentualDesconto);

echo "O  valor do produto após o desconto de $percentualDesconto% é:  R$ " . number_format($valorComDesconto, 2, ',', '.' ) . "\n";

?>