<?php
// cadastro.php — Formulário de cadastro de novo usuário
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

$pagina_atual = 'usuarios';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário — CMS Blog</title>
    <link rel="stylesheet" href="dash.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <?php include 'menu.php'; ?>

    <div class="conteudo">
        <main>
            <h1>Novo Usuário</h1>

            <div class="barra-acoes">
                <h2>&nbsp;</h2>
                <a href="usuarios.php" class="btn btn-secundario">
                    <i class="fa-solid fa-arrow-left"></i> Voltar
                </a>
            </div>

            <section class="formulario-cadastro">
                <form action="#" method="post">

                    <div class="campos-duplos">
                        <div class="campo">
                            <label for="nome">Nome completo</label>
                            <input type="text" id="nome" name="nome"
                                   placeholder="Ex: João da Silva">
                        </div>

                        <div class="campo">
                            <label for="ra">RA</label>
                            <input type="text" id="ra" name="ra"
                                   placeholder="Ex: 115215">
                        </div>
                    </div>

                    <div class="campo">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email"
                               placeholder="Ex: nome@unifev.com.br">
                    </div>

                    <div class="campos-duplos">
                        <div class="campo">
                            <label for="curso">Curso</label>
                            <select id="curso" name="curso">
                                <option value="">Selecione o curso</option>
                                <option value="ADS">ADS</option>
                                <option value="SI">Sistemas de Informação</option>
                                <option value="Engenharia">Engenharia</option>
                                <option value="Administracao">Administração</option>
                            </select>
                        </div>

                        <div class="campo">
                            <label for="status">Status</label>
                            <select id="status" name="status">
                                <option value="">Selecione o status</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </div>

                    <div class="campo">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha"
                               placeholder="Digite uma senha">
                    </div>

                    <div class="botoes-form">
                        <button type="submit" class="btn">
                            <i class="fa-solid fa-user-plus"></i> Cadastrar Usuário
                        </button>
                        <button type="reset" class="btn btn-secundario">
                            <i class="fa-solid fa-eraser"></i> Limpar
                        </button>
                    </div>

                </form>
            </section>
        </main>

        <footer>
            <p>CMS Blog &copy; 2026</p>
            <p>Trabalho Acadêmico — Erick</p>
        </footer>
    </div>

</body>
</html>
