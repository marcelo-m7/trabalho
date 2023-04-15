<?php
  // Recebe o número de telefone a ser pesquisado
  $numero_pesquisa = $_GET['numero'];

  // Abre o arquivo "contactos.txt" em modo de leitura
  $arquivo = fopen('contactos.txt', 'r');

  // Loop que percorre o arquivo procurando pelo número de telefone
  while (!feof($arquivo)) {
    $linha = fgets($arquivo);
    $campos = explode(';', $linha);

    // Verifica se o número de telefone da linha atual corresponde ao número pesquisado
    if ($campos[2] == $numero_pesquisa) {
      // Se corresponder, exibe os campos nome, email e número
      echo "Nome: $campos[0]<br>";
      echo "Email: $campos[1]<br>";
      echo "Número: $campos[2]<br>";
      break;
    }
  }

  // Fecha o arquivo
  fclose($arquivo);
?>


