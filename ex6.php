<?php
//Função para verificar se um número é positivo, negativo ou zero
function verificarNumero($numero) {
    // Verificando a condição do número
    if ($numero > 0) {
        return "Positivo";
    } elseif ($numero <0) {
        return "Negativo";
    } elseif ($numero = 0) {
        return "Zero";
    }
}

// Testando a função com alguns números
$numero1= 30;
$numero2= -5;
$numero3= 0;

echo "O número $numero1 é ". verificarNumero($numero1) . ".<br>";
echo "O número $numero2 é ". verificarNumero($numero2) . ".<br>";
echo "O número $numero3 é ". verificarNumero($numero3) . ".<br>";
?>