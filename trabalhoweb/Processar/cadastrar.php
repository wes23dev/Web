<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Exibindo as informações fornecidas
    echo "<h1>Informações Cadastradas</h1>";
    echo "<p><strong>Nome e Sobrenome:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Nickname:</strong> " . htmlspecialchars($nickname) . "</p>";
    echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Telefone:</strong> " . htmlspecialchars($phone) . "</p>";
    echo "<p><strong>Senha:</strong> " . htmlspecialchars($password) . "</p>";
    
    echo "<button onclick=\"window.location.href='../registro/registro.html'\">Voltar ao Formulário</button>";
  }
?>
