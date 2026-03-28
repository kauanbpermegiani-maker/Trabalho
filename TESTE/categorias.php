<?php
// categorias.php — Nova tela de gerenciamento de categorias
// (substitui o item "Relatórios" do menu original, conforme requisito do trabalho)
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

$pagina_atual = 'categorias';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias — CMS Blog</title>
    <link rel="stylesheet" href="dash.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <?php include 'menu.php'; ?>

    <div class="conteudo">
        <main>
            <h1>Categorias</h1>

            <!-- Barra de ações -->
            <div class="barra-acoes">
                <h2>4 categorias cadastradas</h2>
                <a href="nova-categoria.php" class="btn">
                    <i class="fa-solid fa-plus"></i> Adicionar Nova
                </a>
            </div>

            <!-- Tabela de categorias -->
            <section class="tabela-usuarios">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Posts</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><i class="fa-solid fa-code"></i> Desenvolvimento</td>
                            <td>Programação, lógica e desenvolvimento de sistemas</td>
                            <td>4</td>
                            <td class="acoes">
                                <a href="#" title="Editar"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Excluir" class="excluir"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><i class="fa-solid fa-database"></i> Banco de Dados</td>
                            <td>SQL, modelagem e administração de dados</td>
                            <td>3</td>
                            <td class="acoes">
                                <a href="#" title="Editar"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Excluir" class="excluir"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><i class="fa-solid fa-robot"></i> Inovação</td>
                            <td>Inteligência artificial, tendências e futuro da tecnologia</td>
                            <td>2</td>
                            <td class="acoes">
                                <a href="#" title="Editar"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Excluir" class="excluir"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><i class="fa-solid fa-shield-halved"></i> Segurança</td>
                            <td>Segurança da informação, boas práticas e proteção de dados</td>
                            <td>1</td>
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
            <p>CMS Blog &copy; 2026</p>
            <p>Trabalho Acadêmico — Erick</p>
        </footer>
    </div>

</body>
</html>
