<?php
session_start();

// Verificar se os dados estão disponíveis na sessão
if (!isset($_SESSION['name'])) {
    // Caso não haja dados na sessão, redireciona para a página de registro
    header('Location: registro.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Registro</title>
    <link rel="stylesheet" href="confirmacao.css">
</head>
<body>
    <div class="form-container">
        <h1>Confirmação de Registro</h1>

        <p><strong>Nome e Sobrenome:</strong> <?php echo $_SESSION['name']; ?></p>
        <p><strong>Nickname:</strong> <?php echo $_SESSION['nickname']; ?></p>
        <p><strong>E-mail de Recuperação:</strong> <?php echo $_SESSION['email']; ?></p>
        <p><strong>Telefone:</strong> <?php echo $_SESSION['phone']; ?></p>
        <p><strong>Senha:</strong> <?php echo $_SESSION['password']; ?></p>
        

        <form action="registro.php" method="GET">
            <button type="submit">Editar Dados</button>
        </form>

        <form action="../Login/login.html" method="get">
            <button type="submit">Ir para o Login</button>
        </form>
    </div>
</body>
</html>
