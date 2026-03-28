<?php
// posts.php — Lista de postagens do blog
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

$pagina_atual = 'posts';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens — CMS Blog</title>
    <link rel="stylesheet" href="dash.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <?php include 'menu.php'; ?>

    <div class="conteudo">
        <main>
            <h1>Postagens</h1>

            <!-- Barra de ações -->
            <div class="barra-acoes">
                <h2>3 posts cadastrados</h2>
                <a href="novo-post.php" class="btn">
                    <i class="fa-solid fa-pen-to-square"></i> Adicionar Novo
                </a>
            </div>

            <!-- Tabela de posts -->
            <section class="tabela-usuarios">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Categoria</th>
                            <th>Autor</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Introdução ao Desenvolvimento Web</td>
                            <td>Desenvolvimento</td>
                            <td>Kauan Permegiani</td>
                            <td><span class="status ativo publicado">Publicado</span></td>
                            <td class="acoes">
                                <a href="#" title="Visualizar"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" title="Editar"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Excluir" class="excluir"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Boas Práticas em Banco de Dados</td>
                            <td>Banco de Dados</td>
                            <td>Kauan Permegiani</td>
                            <td><span class="status ativo publicado">Publicado</span></td>
                            <td class="acoes">
                                <a href="#" title="Visualizar"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" title="Editar"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Excluir" class="excluir"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>O Futuro da Inteligência Artificial</td>
                            <td>Inovação</td>
                            <td>Kauan Permegiani</td>
                            <td><span class="status inativo rascunho">Rascunho</span></td>
                            <td class="acoes">
                                <a href="#" title="Visualizar"><i class="fa-solid fa-eye"></i></a>
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
