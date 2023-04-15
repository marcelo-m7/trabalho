<?php 

   $nome = addslashes($_POST['nome']);
   $email = addslashes($_POST['email']);
   $numero = addslashes($_POST['numero']);

  $arquivo = fopen('contactos.txt', 'a');

  fwrite($arquivo, "$nome;$email;a$numero\n");

  fclose($arquivo);
?>