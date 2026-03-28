<?php
// novo-post.php — Formulário para criar novo post
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
    <title>Novo Post — CMS Blog</title>
    <link rel="stylesheet" href="dash.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <?php include 'menu.php'; ?>

    <div class="conteudo">
        <main>
            <h1>Novo Post</h1>

            <div class="barra-acoes">
                <h2>&nbsp;</h2>
                <a href="posts.php" class="btn btn-secundario">
                    <i class="fa-solid fa-arrow-left"></i> Voltar
                </a>
            </div>

            <section class="formulario-cadastro">
                <form action="#" method="post">

                    <div class="campo">
                        <label for="titulo">Título do post</label>
                        <input type="text" id="titulo" name="titulo"
                               placeholder="Digite o título do post">
                    </div>

                    <!-- Dois campos lado a lado -->
                    <div class="campos-duplos">
                        <div class="campo">
                            <label for="categoria">Categoria</label>
                            <select id="categoria" name="categoria">
                                <option value="">Selecione a categoria</option>
                                <option value="Desenvolvimento">Desenvolvimento</option>
                                <option value="Banco de Dados">Banco de Dados</option>
                                <option value="Inovação">Inovação</option>
                                <option value="Segurança">Segurança</option>
                            </select>
                        </div>

                        <div class="campo">
                            <label for="status">Status</label>
                            <select id="status" name="status">
                                <option value="">Selecione o status</option>
                                <option value="Publicado">Publicado</option>
                                <option value="Rascunho">Rascunho</option>
                            </select>
                        </div>
                    </div>

                    <div class="campo">
                        <label for="autor">Autor</label>
                        <!-- Preenchido automaticamente com o usuário logado -->
                        <input type="text" id="autor" name="autor"
                               value="<?php echo $_SESSION['usuario']; ?>" readonly>
                    </div>

                    <div class="campo">
                        <label for="conteudo">Conteúdo</label>
                        <textarea id="conteudo" name="conteudo"
                                  placeholder="Digite o conteúdo do post aqui..."></textarea>
                    </div>

                    <div class="botoes-form">
                        <button type="submit" class="btn">
                            <i class="fa-solid fa-floppy-disk"></i> Salvar Post
                        </button>
                        <button type="reset" class="btn btn-secundario">
                            <i class="fa-solid fa-eraser"></i> Limpar
                        </button>
                    </div>

                </form>
            </section>
        </main>

        <footer>
            <p>CMS Blog 2026</p>
            <p>Trabalho Projeto Integrado — Erick</p>
        </footer>
    </div>

</body>
</html>
