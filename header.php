<!DOCTYPE html>
<html>
<head>
  <style>
    /* Styles pour l'en-tête */
    header {
      position: fixed;
      top: 0;
      width: 100%;
      background-color: #FFA500; /* Couleur orange */
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px;
      /* Autres styles de votre choix pour l'en-tête */
      transition: background-color 1.0s ease; /* Transition de couleur */
    }
    
    /* Styles pour le logo */
    #logo {
      width: 80px; /* Ajustez la taille selon vos besoins */
      height: auto;
      margin-right: 10px;
      /* Autres styles de votre choix pour le logo */
    }
    
    /* Styles pour les catégories */
    .category {
      color: #808080;
      margin-right: 10px;
      cursor: pointer;
      text-decoration: none; /* Supprime le soulignement */
      position: relative;
      z-index: 2;
      /* Autres styles de votre choix pour les catégories */
    }
    
    /* Styles pour les boutons */
    .button {
      padding: 5px 10px;
      background-color: #808080;
      color: #ffffff;
      text-decoration: none;
      margin-right: 10px;
      /* Autres styles de votre choix pour les boutons */
    }
    
    /* Styles pour le bouton d'inscription */
    .inscription-button {
      width: 100px; /* Ajustez la taille selon vos besoins */
      height: auto;
      margin-left: 10px;
      /* Autres styles de votre choix pour le bouton d'inscription */
    }
    
    /* Style pour la navbar en version scrolled */
    .scrolled {
      background-color: #FFEAA6; /* Couleur FFEAA6 lors du scroll */
      /* Autres styles appliqués lorsque la page est scrollée */
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
