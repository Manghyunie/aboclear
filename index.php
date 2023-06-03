<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
      /* Ajoutez le style pour le header ici */
      header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #FFA500;
        display: flex;
        align-items: center;
        padding: 10px;
        transition: background-color 0.3s ease;
      }

      /* Ajoutez d'autres styles pour le header selon vos besoins */

      /* Ajoutez le style pour le contenu de la page ici */
      body {
        margin-top: 60px; /* Ajustez la valeur selon la hauteur de votre header */
      }

      /* Ajoutez d'autres styles pour le contenu de la page selon vos besoins */
    </style>
    <script>
      window.onscroll = function() { 
        var navbar = document.getElementById('navbar');
        if (window.pageYOffset > 0) {
          navbar.classList.add("scrolled");
        } else {
          navbar.classList.remove("scrolled");
        }
      };
    </script>
    <title>Aboclear</title>
</head>
<body>

<header id="navbar">
  <!-- Contenu du header -->
</header>

<div class="container-fluid" style="position: relative; overflow: hidden;">
  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh; background-image: url('images/fond_gens_ordi.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <!-- Contenu de la page -->
  </div>
</div>

<div class="container mt-3">
  <!-- Reste du contenu de la page -->
</div>

<img class="separator-image" src="images/separator.png" alt="">
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
<?php include 'footer.php' ?>
<br><br>
</body>
</html>
