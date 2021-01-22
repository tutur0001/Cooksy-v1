<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/connection.css">
    <link rel="shortcut icon" href="../img/ico-chef-192x192.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">
    <title>Cooksy | Inscription</title>
</head>

<body>
            <?php include_once './src/views/templates/header.php' ?>
    <main>
        <?php
        if (isset($_SESSION['error'])) {
            if ($_SESSION['error'] == 'register') {
                echo '<script>window.alert("Le nom d\'utilisateur ou l\'adresse mail existe déjà. Veuillez les modifier ou vous connectez")</script>';
                $_SESSION['error'] == 0;
            }
        }
        ?>
        <div class="container">
            <div id="login-card" class="card">
<div class="card-body">
  <h2 class="text-center">S'inscrire</h2>
  <br>
  <form action="/register" method="POST">
    <div class="form-group">
      <input type="text" class="form-control ubu"  name="name" placeholder="Entrer votre nom">
    </div>
    <div class="form-group">
      <input type="email" class="form-control ubu" placeholder="Entrer votre email" name="email">
    </div>
    <div class="form-group">
      <input type="password" class="form-control ubu"  placeholder="Entrer un mot de passe" name="mdp">
    </div>
    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">m'inscrire</button>
    <br>
    <p> Vous avez un compte ? <a href="/connection">Cliquez ici !</a></p>
<br>
   </div>
    </main>
    <?php include_once './src/views/templates/footer.php' ?>

</body>

</html>