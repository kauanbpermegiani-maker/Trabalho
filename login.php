<?php
// login.php — Tela de autenticação do CMS
session_start();

// Se já estiver logado, vai direto ao dashboard
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

$erro = $_GET['erro'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — CMS Blog</title>
    <link rel="stylesheet" href="dash.css">
    <!-- Fonte Nunito: mais arredondada e amigável -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="pagina-login">

    <div class="login-container">
        <div class="login-box">

            <!-- Logo / Cabeçalho -->
            <div class="login-logo">
                <i class="fa-solid fa-newspaper"></i>
                <h1>CMS Blog</h1>
                <p>Acesse o painel administrativo</p>
            </div>

            <!-- Mensagem de erro (aparece só quando erro=1 na URL) -->
            <?php if ($erro == '1'): ?>
                <div class="mensagem-erro">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    E-mail ou senha inválidos. Tente novamente.
                </div>
            <?php endif; ?>

            <!-- Formulário de login -->
            <form action="auth.php" method="post" class="form-login">

                <div class="campo">
                    <label for="email">
                        <i class="fa-solid fa-envelope"></i> E-mail
                    </label>
                    <input type="email" id="email" name="email"
                           placeholder="Digite seu e-mail" required autofocus>
                </div>

                <div class="campo">
                    <label for="senha">
                        <i class="fa-solid fa-lock"></i> Senha
                    </label>
                    <input type="password" id="senha" name="senha"
                           placeholder="Digite sua senha" required>
                </div>

                <button type="submit" class="btn btn-login">
                    <i class="fa-solid fa-right-to-bracket"></i> Entrar
                </button>

            </form>

            <!-- Credenciais de teste (útil no trabalho acadêmico) -->
            <div class="login-info">
                <p><i class="fa-solid fa-circle-info"></i> Acesso de teste:</p>
                <p>E-mail: <strong>Kauan@unifev.com.br</strong></p>
                <p>Senha: <strong>123456</strong></p>
            </div>

        </div>
    </div>

</body>
</html>
