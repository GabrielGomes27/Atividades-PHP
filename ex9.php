<?php
// Função que inverte a string
function inverter_string($palavra) {
    return strrev($palavra);
}

// Passando a string para a função
$palavra = "dev"; // Inicializando a variável


// Exibindo o resultado
echo inverter_string($palavra); // Saída: "ved"
?> 