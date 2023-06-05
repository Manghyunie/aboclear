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
    #navbar {
      position: sticky;
      top: 0;
      background-color: #ffad42;
      padding: 10px;
      transition: background-color 0.3s ease;
    }

    header.scrolled {
      background-color: #FFEAA6;
    }

    body {
      margin: 0;
      padding: 0;
    }

    .main-div {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 800px;
  height: 600px;
  margin: 0 auto;
}

.row {
  display: flex;
  justify-content: space-between;
  width: 120%;
}

.first-div,
.second-div {
  padding: 20px;
  text-align: left;
  border-radius: 50px;
  background-color: white;
  margin: 10px;
  position: relative;
}

.first-div {
  flex: 2;
  width: 70%; /* Réduire la largeur horizontale */
}

.second-div {
  flex: 1;
  width: 50%; /* Réduire la largeur horizontale */
}

.first-div strong,
.second-div strong {
  font-size: 28px;
}

.first-div p,
.second-div p {
  font-size: 14px;
  position: relative;
}

.sub-div {
  width: 50%;
  float: left;
  box-sizing: border-box;
  padding: 10px;
}

.sub-div p {
  margin: 0;
}

.first-div img,
.second-div img {
  position: absolute;
  top: 0;
  right: 0;
  max-width: 40%;
  height: auto;
}
.ajust {
  position: absolute;
  top: 0;
  right: 0;
  max-width: 55% !important;
  height: auto;
}
.ajust2 {
  position: absolute;
  top: 50px !important;
  right: 10px !important;
  max-width: 50% !important;
  height: auto;
}
.ajust3 {
  position: absolute;
  top: 30px !important;
  right: 25px !important;
  max-width: 40% !important;
  height: auto;
}



  </style>



  <title>Aboclear</title>
</head>
<header id="navbar" class="sticky-top">
  <div class="index-header-content">
    <a href="index.php">
      <img id="logo" class="index-header-logo" src="images/logo-header.png" alt="Logo">
    </a>
    <nav class="index-navbar-links">
      <div class="index-category-group">
        <a class="index-category" href="informations.php"><strong>Que fait-on ?</strong></a>
        <a class="index-category" href="blog.php"><strong>Blog</strong></a>
      </div>

      <form class="index-search-form" action="rechercher.php" method="GET">
        <input type="text" name="query" class="index-search-input rounded-pill" placeholder="Recherchez votre abonnement">
        <i class="fas fa-search index-search-icon"></i>
        <button type="submit" class="search-button" style="display: none;">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </nav>
    <div>
      <a class="index-category" href="connexion.php"><strong>Connexion</strong></a>
      <a href="inscription.php">
        <img class="index-inscription-button" src="images/inscription_orange.png" alt="Inscription">
      </a>
    </div>
  </div>
</header>



<body>

  <div class="container-fluid index-section1" style="position: relative; overflow: hidden;">
    <div class="index-content-wrapper">
      <span class="index-circle-button">100% <strong>Gratuit</strong></span>
      <span class="index-text-normal">Comparateur mis à jour <strong>hebdomadairement</strong></span>
    </div>
    <div class="index-page-title">
      
      Recherchez<br>
      <span class="index-highlight">l'abonnement</span> qui vous<br>
      intéresse !
    </div>
    <div class="index-content-wrapper2">
      <span class="index-text-normal">Le moteur de clarification de conditions générales<br>
        d’abonnements</span>
      <br><br>
      <form class="index-search-bar2" action="rechercher.php" method="GET">
        <input type="text" name="query" class="index-search-input2 rounded-pill" placeholder="Un abonnement...">
        <i class="fas fa-search index-search-icon"></i>
        <button type="submit" class="index-search-button2"><strong class="allonsy">Allons-y !!</strong>
        </button>
      </form>
      <br>
      <a href="ravancee.php" class="index-custom-button">Recherche avancée</a>
    </div>
    <br><br><br><br><br>
  </div>






  <div class="index-section2">
    <br>
    <div class="index-page-title2">
      De la <span class="index-highlight2">sécurité</span>, mais surtout de la<br>
      <span class="index-highlight2">confiance !</span>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="main-div">
  <div class="row">
    <div class="first-div">
    <img class="ajust" src="images/categorie1.png" alt="Image 1">
      <p><strong>Des conditions<br>
        totalement<br>
        transparentes !</strong></p><br>
      <p>On met les points sur les i, les barres sur les T,<br>
        franchement on est réglo mais genre plus réglo<br>
        tu meurs</p><br>
      <p><strong>En savoir plus -></strong></p>
    </div>
    <div class="second-div">
    <img src="images/categorie2.png" alt="Image 2">
    <br><br><p><strong>Vos données<br>
        sécurisées sur<br>
        nos serveurs</strong></p>
      <p>Lorem ipsum dolor sit amet, consectetur<br>
        adipis elit. Sit enim ne</p>
      <p><strong>En savoir plus -></strong></p>
    </div>
  </div>
  <div class="row">
    <div class="second-div">
    <img class="ajust2" src="images/categorie3.png" alt="Image 3">
    <br><br><br><br><p><strong>On vous<br>
        fidélise mais de<br>
        façon cool</strong></p>
      <p>Lorem ipsum dolor sit amet, consectetur<br>
        adipis elit. Sit enim ne</p>
      <p><strong>En savoir plus -></strong></p>
    </div>
      <div class="first-div">
      <img class="ajust3" src="images/categorie4.png" alt="Image 4">
      <br><br><br><br><p><strong>Réveillez-vous sur une<br>
          planète de fun</strong></p><br>
        <p>On met les points sur les i, les barres sur les T,<br>
          franchement on est réglo mais genre plus réglo tu meurs</p><br>
        <p><strong>En savoir plus -></strong></p>
      </div>
  </div>
</div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
  <img class="index-separator-image" src="images/separator.png">
  <div class="index-footer-container">
    <?php include 'footer.php' ?>
  </div>

  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    window.addEventListener('scroll', function() {
      var header = document.getElementById('navbar');
      if (window.scrollY > 0) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  </script>
</body>

</html>