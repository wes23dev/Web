<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do login
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];

    // Verificando os dados (aqui você pode fazer uma verificação com um banco de dados)
    if ($nickname == "usuarioTeste" && $password == "senhaTeste") {
      echo "<h1>Login bem-sucedido!</h1>";
    } else {
      echo "<h1>Erro: Nome de usuário ou senha incorretos.</h1>";
    }

    echo "<button onclick=\"window.location.href='../login/login.html'\">Voltar ao Login</button>";
  }
?>
