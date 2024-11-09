<?php
// Função para receber um número inteiro e calcular o seu fatorial

function fatorial($n) {
    // Se o número for 0, retorna 1, pois 0! = 1
    if ($n == 0 || $n == 1) {
        return 1;
        
    }

    $resultado = 1;

    // Multiplica de 1 até n
    for ($i = 2; $i <= $n; $i++) { // Loop de 2 até n
        $resultado *= $i;

    }

    return $resultado;

}

$n=10;
$resultado = fatorial($n);
echo "O fatorial de $n é $resultado";
?>