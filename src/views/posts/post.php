<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../../css/post.css">
    <link rel="shortcut icon" href="../img/ico-chef-192x192.png" type="image/x-icon">
    <title>Cooksy | Recettes | <?= htmlspecialchars($post->getTitle()); ?></title>
</head>

<body>
<?php include_once './src/views/templates/header.php' ?>
    <a id="add" href="/posts">Retour à la page des recettes</a>
    <article>
        <h3><?= htmlspecialchars($post->getTitle()); ?></h3>
        <h2><?= $post->getCreationDate(); ?></h2>
        <p><?= nl2br(htmlspecialchars($post->getMessage())); ?></p>
    </article>
    <?php include_once './src/views/templates/footer.php' ?>

</body>

</html>