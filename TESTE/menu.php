<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pagina_atual = $pagina_atual ?? '';

$itens_menu = [
    ['href' => 'index.php',      'icone' => 'fa-house',     'label' => 'Início',     'chave' => 'inicio'],
    ['href' => 'categorias.php', 'icone' => 'fa-tags',      'label' => 'Categorias', 'chave' => 'categorias'],
    ['href' => 'posts.php',      'icone' => 'fa-newspaper', 'label' => 'Postagens',  'chave' => 'posts'],
    ['href' => 'usuarios.php',   'icone' => 'fa-users',     'label' => 'Usuários',   'chave' => 'usuarios'],
];
?>
<nav class="menu-lateral">

    <div>
        <div class="logo">
            <h2><i class="fa-solid fa-newspaper"></i> CMS Blog</h2>
            <span>Painel Admin</span>
        </div>

        <ul>
            <?php if (!empty($itens_menu)): ?>
                <?php foreach ($itens_menu as $item): ?>
                    <li>
                        <a href="<?= $item['href'] ?>"
                           class="<?= ($pagina_atual === $item['chave']) ? 'ativo' : '' ?>">
                            <i class="fa-solid <?= $item['icone'] ?>"></i>
                            <?= $item['label'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>

    <div class="perfil">
        <p>Logado como</p>

        <strong>
            <i class="fa-solid fa-user"></i>
            <?= $_SESSION['usuario'] ?? 'Usuário' ?>
        </strong>

        <strong>
            <i class="fa-solid fa-id-badge"></i>
            RA: <?= $_SESSION['ra'] ?? '---' ?>
        </strong>

        <a href="logout.php" class="btn-sair">
            <i class="fa-solid fa-right-from-bracket"></i> Sair
        </a>
    </div>

</nav>