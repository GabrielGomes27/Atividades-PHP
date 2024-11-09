<?php
// Função que calcula o valor final com juros simples

function calcular_juros_simples($capital_inicial, $taxa_juros, $tempo) {
    // Fórmula dos juros simples: valor_final = capital_inicial + (capital_inicial * taxa_juros * tempo)

    echo "Dentro da função calcular_juros_simples:<br>";
    echo "Capital Inicial: " . $capital_inicial. "<br>";
    echo "Taxa de Juros: " . ($taxa_juros * 100) . "%<br>";
    echo "Tempo (meses): " . $tempo. "<br><br>";

    $valor_final =  $capital_inicial + ($capital_inicial * $taxa_juros * $tempo);

    return $valor_final;
}


// Exemplo de uso da função
$capital_inicial = 4000;  // Exemplo de capital inicial
$taxa_juros = 0.05;     //  Exemplo de taxa de juros (5%)
$tempo = 12;            //   Exemplo de tempo (12 meses)

echo "Valores de entrada:<br>";
echo "Capital Inicial: R$ " . number_format($capital_inicial, 2, ',', '.') . "<br>";
echo "Taxa de Juros: " . ($taxa_juros * 100) . "%<br>";
echo "Tempo (meses): " . $tempo . "<br><br>";

$valor_final = calcular_juros_simples($capital_inicial, $taxa_juros, $tempo);


// Exibindo o resultado
echo "valor final após " . $tempo . " meses: R$ " . number_format($valor_final, 2, ',', '.');
?>
