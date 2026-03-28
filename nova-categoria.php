<?php
// nova-categoria.php — Formulário para adicionar nova categoria
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
    <title>Nova Categoria — CMS Blog</title>
    <link rel="stylesheet" href="dash.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <?php include 'menu.php'; ?>

    <div class="conteudo">
        <main>
            <h1>Nova Categoria</h1>

            <div class="barra-acoes">
                <h2>&nbsp;</h2>
                <a href="categorias.php" class="btn btn-secundario">
                    <i class="fa-solid fa-arrow-left"></i> Voltar
                </a>
            </div>

            <section class="formulario-cadastro">
                <form action="#" method="post">

                    <div class="campo">
                        <label for="nome">Nome da categoria</label>
                        <input type="text" id="nome" name="nome"
                               placeholder="Ex: Desenvolvimento, Segurança, Inovação...">
                    </div>

                    <div class="campo">
                        <label for="descricao">Descrição</label>
                        <textarea id="descricao" name="descricao"
                                  placeholder="Breve descrição sobre esta categoria" style="min-height:100px"></textarea>
                    </div>

                    <div class="botoes-form">
                        <button type="submit" class="btn">
                            <i class="fa-solid fa-floppy-disk"></i> Salvar Categoria
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
