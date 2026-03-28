<?php
// auth.php — Verifica as credenciais de login
// (arquivo mantido igual ao original, sem alterações)
session_start();

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$emailCorreto = 'Kauan@unifev.com.br';
$senhaCorreta = '123456';

if ($email === $emailCorreto && $senha === $senhaCorreta) {
    $_SESSION['usuario'] = 'Kauan Permegiani';
    $_SESSION['ra'] = '115215';
    $_SESSION['email'] = $email;

    header("Location: index.php");
    exit;
} else {
    header("Location: login.php?erro=1");
    exit;
}
