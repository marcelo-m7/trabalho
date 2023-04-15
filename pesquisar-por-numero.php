<?php

if (isset($_GET['numero'])) {
  $numero_pesquisa = 'a' . $_GET['numero'];

  $arquivo = fopen('contactos.txt', 'r');

  while (($linha = fgets($arquivo)) !== false) {
    $campos = explode(';', $linha);

    if (trim($campos[2]) == $numero_pesquisa) {
      echo "Nome: $campos[0]<br>";
      echo "Email: $campos[1]<br>";
      echo "Número do aluno: $campos[2]<br>";
      break;
    }
    else {break;}
  }
  echo "O número de aluno informado não foi encontrado. Tente novamente.";

  fclose($arquivo);
} else {
  echo "Por favor, informe o número do aluno a ser pesquisado.";
}

?>
