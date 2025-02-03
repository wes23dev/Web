<?php
session_start();

// Limpa os dados relacionados ao registro
unset($_SESSION['name']);
unset($_SESSION['nickname']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['password']);
unset($_SESSION['confirmPassword']);

// Redireciona para a página de registro
header('Location: registro.php');
exit();
?>
