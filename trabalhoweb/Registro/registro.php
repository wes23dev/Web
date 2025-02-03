<?php
session_start();

// Verificar se os dados do formulário foram enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validar se todos os campos foram preenchidos
    if (
        empty($_POST['name']) || empty($_POST['nickname']) || empty($_POST['email']) ||
        empty($_POST['phone']) || empty($_POST['password']) || empty($_POST['confirmPassword'])
    ) {
        $errorMessage = "Por favor, preencha todos os campos.";
    } elseif ($_POST['password'] !== $_POST['confirmPassword']) {
        $errorMessage = "As senhas não coincidem.";
    } elseif (strlen($_POST['password']) < 6) {
        $errorMessage = "A senha deve ter pelo menos 6 caracteres.";
    } else {
        // Armazenar apenas informações seguras na sessão
        $_SESSION['name'] = htmlspecialchars($_POST['name']);
        $_SESSION['nickname'] = htmlspecialchars($_POST['nickname']);
        $_SESSION['email'] = htmlspecialchars($_POST['email']);
        $_SESSION['phone'] = htmlspecialchars($_POST['phone']);

        // Criar hash da senha
        $_SESSION['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Redirecionar para a página de confirmação
        header('Location: confirmacao.php');
        exit();
    }
}
?>