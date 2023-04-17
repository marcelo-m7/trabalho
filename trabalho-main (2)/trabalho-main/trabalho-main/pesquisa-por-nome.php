<?php
// Recebe o nome do aluno a ser pesquisado
$nome_pesquisa = $_GET['nome'];

// Adiciona o caractere 'a' antes do nome do aluno para buscar na última coluna do arquivo
$nome_pesquisa = $nome_pesquisa;

// Abre o arquivo "contactos.txt" em modo de leitura
$arquivo = fopen('contactos.txt', 'r');

// Loop que percorre o arquivo procurando pelo nome do aluno
while (!feof($arquivo)) {
  $linha = fgets($arquivo);
  $campos = explode(';', $linha);

  // Verifica se o nome da linha atual contém a pesquisa
  if (stripos($campos[0], $nome_pesquisa) !== false) {
    // Se contiver, exibe os campos nome, email e número do aluno
    echo "Nome: $campos[0]<br>";
    echo "Email: $campos[1]<br>";
    echo "Número: $campos[2]<br>";
    break;
  }
}

// Fecha o arquivo
fclose($arquivo);
?>
