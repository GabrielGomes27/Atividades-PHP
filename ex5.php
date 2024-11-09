<?php
//Função para contar o número de caracteres em uma palavra
function contarCaracteres($palavra) {
    //usando a função strlen para contar os caracteres
    return strlen($palavra);
}

//Testando a função com uma palavra 
$palavra = "programador";
$quantidadeCaracteres = contarCaracteres($palavra);

echo "A palavra '$palavra' tem $quantidadeCaracteres caracteres.";
?>