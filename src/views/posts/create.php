<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="/css/post.css">
    <link rel="shortcut icon" href="../img/ico-chef-192x192.png" type="image/x-icon">
    <title>Cooksy | Recette</title>
</head>

<body>
    <?php include_once './src/views/templates/header.php' ?>
    <a id="add" href="/posts">Retour aux recettes</a>
    <form action="/posts" method="POST">
        <h3>Nouvelle recette</h3>
        <input type="hidden" name="user_id" value="<?= $_SESSION['user'][0] ?>">
        <label for="title">Nom de la recette:</label>
        <input name="title" type="text">
        <label for="message">Ingrédients:</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        </div>
        <input id="submit" type="submit" value="Valider">
    </form>
    <?php include_once './src/views/templates/footer.php' ?>

</body>

</html>