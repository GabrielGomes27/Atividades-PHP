<?php
//Função para calcular a média e determinar a situação do aluno
function calcularMedia($nota1, $nota2, $nota3) {
    //Calculando a média
    $media = ($nota1 + $nota2 + $nota3) / 3;

    //verificando se o aluno foi aprovado ou reprovado
    if ($media >= 6) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

// Testando a função com algumas notas
$nota1 = 10;
$nota2 = 8;
$nota3 = 4;

$status = calcularMedia($nota1, $nota2, $nota3);
echo "O aluno foi: " . $status;
?>