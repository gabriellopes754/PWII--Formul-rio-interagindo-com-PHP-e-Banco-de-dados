<!doctype html>
<html lang="pt-br">

<head>
  <title>Listagem</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="meu.css">
</head>

<body>
  <table border="1" width="100%">
    <tr>
      <td>Avatar</td>
      <td>RM</td>
      <td>Nome</td>
      <td>Email</td>
      <td>Senha</td>
      <td>Tipo</td>
      <td colspan="2">AÇÃO</td>
    </tr>

    <?php

    include "conexao.php";

    $dados = $conn->query("SELECT * FROM cadastro");

    while ($linha = $dados->fetch_assoc()) {

      $rm = $linha['rm'];
      $nome = $linha['nome'];
      $email = $linha['email'];
      $senha = $linha['senha'];
      $avatar = $linha['avatar'];
      $tipo = $linha['tipo'];

      echo "<tr>
            <td><img src=$avatar></td>
            <td>$rm</td>
            <td>$nome</td>
            <td>$email</td>
            <td>$senha</td>
            <td>$tipo</td>
            <td><a href=''>Excluir</a></td>
            <td><a href=''>Alterar</a></td>
            </tr>";
    }
    ?>
  </table>
</body>

</html>