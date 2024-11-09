<?php

function classificarIdade($idade) {
  if ($idade >= 0 && $idade <= 12) {
    return "Criança";
  } elseif ($idade >= 13 && $idade <= 17) {
    return "Adolescente";
  } elseif ($idade >= 18 && $idade <= 64) {
    return "Adulto";
  } elseif ($idade >= 65) {
    return "Idoso";
  } else {
    return "Idade inválida"; //Caso a idade seja negativa
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $idade = $_POST['idade'];

  if (is_numeric($idade) && $idade >= 0) {

    $categoria = classificarIdade($idade);
    echo "<h2>A categoria para a idade $idade é: $categoria</h2>";
  } else {
    echo "<h2>Por favor, insira uma idade válida (um número não negativo).</h2>";
  }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Classificação de Idade</title>
</head>
</body>
    <h1>Classifique sua Idade</h1>
    <!-- Formulário para capturar a idade -->
    <form method="POST" action="">
      <label for="idade">Digite sua idade: </label>
      <input type="number" id="idade" name="idade" required>
      <button type="submit">Classificar</button>
  </form>
</body>
</hmtl>  


