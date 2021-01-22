<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="shortcut icon" href="../img/ico-chef-192x192.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Cooksy | Accueil</title>
</head>

<body>
    <?php include_once './src/views/templates/header.php' ?>
    <main>
        <div class="container">
            <section class="flex crew">
                <article>
                <h2>Bienvenu sur Cooksy le premier blog de cuisine ou le chef c'est toi !</h2>
                </article>
                <img src="../img/recette.jpeg" alt="" srcset="">
            </section>

           
<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="/img/cuisine.jpg" alt="Los Angeles" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="/img/cuisine-avec-ses-enfants.jpg" alt="Chicago" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="/img/pro.jpg" alt="New York" width="1100" height="500">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon" style="color: black;"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
        </div>
    </main>
    <?php include_once './src/views/templates/footer.php' ?>
</body>

</html>

