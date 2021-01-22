<header>
    <nav class="flex">
        <ul class="flex">
            <li><a href="/">Accueil</a></li>
            <li><a href="/posts">Recettes</a></li>
            <?php if (isset($_SESSION['user'])) : ?> 
                <?php if ($_SESSION['user'][0] === 1) : ?>
                        <li><a href="/admin">Admin Panel</a></li>
                    <?php endif ?>
                    <li><a href="/deconnect">Déconnexion</a></li>
            <?php else : ?>
                    <li><a href="/connection">Connexion</a></li>
            <?php endif ?>
        </ul>
    </nav>
    <h1>Cooksy</h1>
    <h3>Créer partage savour comme un chef !</h3>
</header>