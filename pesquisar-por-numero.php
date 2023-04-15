<?php

if (isset($_GET['numero'])) {
  $numero_pesquisa = 'a' . $_GET['numero'];

  $arquivo = fopen('contactos.txt', 'r');

  while (($linha = fgets($arquivo)) !== false) {
    $campos = explode(';', $linha);

    if (trim($campos[2]) == $numero_pesquisa) {
      echo "<p>Nome: $campos[0]<p>";
      echo "<p>Email: $campos[1]<p>";
      echo "<p>Número do aluno: $campos[2]<p>";
      break;
    }
    else {break;}
  }

  fclose($arquivo);
} else {
  echo "<p> O número de aluno informado não foi encontrado. Tente novamente.<p>";
}

?>
