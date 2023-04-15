<?php
$nome_pesquisa = $_GET['nome'];

$nome_pesquisa = $nome_pesquisa;

$arquivo = fopen('contactos.txt', 'r');

while (!feof($arquivo)) {
  $linha = fgets($arquivo);
  $campos = explode(';', $linha);

  if (stripos($campos[0], $nome_pesquisa) !== false) {
    echo "<p>Nome: $campos[0]<p>";
    echo "<p>Email: $campos[1]<p>";
    echo "<p>Número: $campos[2]<p>";
    break;
  }
}

fclose($arquivo);
?>
