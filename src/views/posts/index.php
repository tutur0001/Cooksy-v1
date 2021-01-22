<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="/css/post.css">
    <link rel="shortcut icon" href="../img/ico-chef-192x192.png" type="image/x-icon">
    <title>Cooksy | Recettes</title>
</head>

<body>
    <?php include_once './src/views/templates/header.php' ?>
    <?php
    if (isset($_SESSION['user'][0])) {
    ?>
        <a id="add" href="/posts/create" role="button">Ajouter une nouvelle recette</a>
    <?php
    } 
    else {
    ?>
        <p>Tu souhaite ajouter une recette ? <a href="/register">S'inscrire!</a></p>
    <?php
    }
    ?>
    <?php foreach ($posts as $post) : ?>
        <article>
            <div>
                <a href="/posts/<?= $post->getId(); ?>">
                    <h3><?= htmlspecialchars($post->getTitle()); ?></h3>
                </a>
                </br>
                <p><?= $post->getCreationDate(); ?></p>
                </br>
            </div>
            <p><?= nl2br(htmlspecialchars($post->getMessage())); ?></p>
        </article>
    <?php endforeach; ?>

    <?php include_once './src/views/templates/footer.php' ?>

</body>

</html>