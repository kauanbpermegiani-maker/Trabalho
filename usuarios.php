<?php
// usuarios.php — Lista e gerenciamento de usuários
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
    <title>Usuários — CMS Blog</title>
    <link rel="stylesheet" href="dash.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <?php include 'menu.php'; ?>

    <div class="conteudo">
        <main>
            <h1>Usuários</h1>

            <!-- Barra de ações: total + botão adicionar -->
            <div class="barra-acoes">
                <h2>5 usuários cadastrados</h2>
                <a href="cadastro.php" class="btn">
                    <i class="fa-solid fa-user-plus"></i> Adicionar Novo
                </a>
            </div>

            <!-- Tabela de usuários -->
            <section class="tabela-usuarios">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Curso</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kauan Permegiani</td>
                            <td>Kauan@unifev.com.br</td>
                            <td>ADS</td>
                            <td><span class="status ativo">Ativo</span></td>
                            <td class="acoes">
                                <a href="#" title="Editar"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Excluir" class="excluir"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lucas Ferreira</td>
                            <td>lucas.ferreira@unifev.com.br</td>
                            <td>ADS</td>
                            <td><span class="status ativo">Ativo</span></td>
                            <td class="acoes">
                                <a href="#" title="Editar"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Excluir" class="excluir"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Beatriz Oliveira</td>
                            <td>beatriz.oliveira@unifev.com.br</td>
                            <td>SI</td>
                            <td><span class="status ativo">Ativo</span></td>
                            <td class="acoes">
                                <a href="#" title="Editar"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Excluir" class="excluir"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Rafael Mendonça</td>
                            <td>rafael.mendonca@unifev.com.br</td>
                            <td>Engenharia</td>
                            <td><span class="status inativo">Inativo</span></td>
                            <td class="acoes">
                                <a href="#" title="Editar"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Excluir" class="excluir"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Isabela Martins</td>
                            <td>isabela.martins@unifev.com.br</td>
                            <td>Administração</td>
                            <td><span class="status ativo">Ativo</span></td>
                            <td class="acoes">
                                <a href="#" title="Editar"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Excluir" class="excluir"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>

        <footer>
            <p>CMS Blog 2026</p>
            <p>Trabalho Projeto Integrado — Erick</p>
        </footer>
    </div>

</body>
</html>
