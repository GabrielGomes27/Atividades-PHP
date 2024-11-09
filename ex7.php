<?php

function calcular_tempo_em_anos_meses_dias($dias) {
    // Iniciando as variáveis

    $anos = 0;
    $meses = 0;
    $dias_restantes = 0;

    // Calculando os anos
$anos = floor($dias / 365);
$dias_restantes = $dias % 365; // Atualiza os dias restantes após o cálculo dos anos

    // Calculando os meses
$meses = floor($dias_restantes / 30);
$dias_restantes = $dias_restantes % 30; // Atualiza os dias restantes após o cálculo dos meses


// Retornando o resultado
return [$anos, $meses, $dias_restantes];
}

// Testando a função com 600 dias
$dias = 600;
list($anos, $meses, $dias_restantes) = calcular_tempo_em_anos_meses_dias($dias);

echo "$dias dias equivalem a $anos ano(s), $meses mês(es) e $dias_restantes dia(s).";
?>


