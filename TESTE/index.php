<?php
// index.php — Dashboard principal do CMS
session_start();

// Redireciona para login se não estiver autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

$pagina_atual = 'inicio'; // Marca o link ativo no menu
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — CMS Blog</title>
    <link rel="stylesheet" href="dash.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <!-- Menu lateral (arquivo compartilhado) -->
    <?php include 'menu.php'; ?>

    <div class="conteudo">
        <main>
            <h1>Painel Principal</h1>

            <!-- Cards de acesso rápido -->
            <section class="container-cards">

                <article>
                    <h2><i class="fa-solid fa-tags"></i> Categorias</h2>
                    <p>Organize as categorias dos posts do blog.</p>
                    <a href="categorias.php" class="btn">
                        <i class="fa-solid fa-arrow-right"></i> Acessar
                    </a>
                </article>

                <article>
                    <h2><i class="fa-solid fa-newspaper"></i> Postagens</h2>
                    <p>Visualize e gerencie os posts publicados.</p>
                    <a href="posts.php" class="btn">
                        <i class="fa-solid fa-arrow-right"></i> Acessar
                    </a>
                </article>

                <article>
                    <h2><i class="fa-solid fa-users"></i> Usuários</h2>
                    <p>Gerencie os usuários cadastrados no sistema.</p>
                    <a href="usuarios.php" class="btn">
                        <i class="fa-solid fa-arrow-right"></i> Acessar
                    </a>
                </article>

                <article>
                    <h2><i class="fa-solid fa-pen-to-square"></i> Novo Post</h2>
                    <p>Crie um novo conteúdo para o CMS do blog.</p>
                    <a href="novo-post.php" class="btn">
                        <i class="fa-solid fa-arrow-right"></i> Acessar
                    </a>
                </article>

            </section>
        </main>

        <footer>
            <p>CMS Blog &copy; 2026</p>
            <p>Trabalho Acadêmico — Erick</p>
        </footer>
    </div>

</body>
</html>
