<!DOCTYPE html>
<html>

<head>
  <style>
    header {
      position: fixed;
      top: 0;
      width: 100%;
      background-color: #FFA500;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px;
      transition: background-color 1.0s ease;
    }


    #logo {
      width: 80px;
      height: auto;
      margin-right: 10px;

    }

    .category {
      color: #808080;
      margin-right: 10px;
      cursor: pointer;
      text-decoration: none;
      position: relative;
      z-index: 2;
    }

    .button {
      padding: 5px 10px;
      background-color: #808080;
      color: #ffffff;
      text-decoration: none;
      margin-right: 10px;

    }

    .inscription-button {
      width: 100px;
      height: auto;
      margin-left: 10px;
    }

    .scrolled {
      background-color: #FFEAA6;
    }
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
</head>
<header id="navbar">
  <a href="index.php">
    <img id="logo" src="images/logo-header.png" alt="Logo">
  </a>

  <a class="category" href="blog.php">Blog</a>
  <a class="category" href="informations.php">Que fait-on ?</a>
  <a class="category" href="recherche.php">Recherche</a>
  <a class="category" href="partenaires.php">Nos partenaires</a>

  <a class="category" href="connexion.php">Connexion</a>
  <a href="inscription.php">
    <img class="inscription-button" src="images/inscription_ordi.png" alt="Inscription">
  </a>
</header>

</html>