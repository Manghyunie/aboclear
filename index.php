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
      <span class="index-circle-button">100% gratuit</span>
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
      <div class="index-search-bar2">
  <input type="text" class="index-search-input2" placeholder="Rechercher...">
  <button class="index-search-button2"><strong class="allonsy">Allons-y !!</strong></button>
</div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>






  <div class="index-section2"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <img class="separator-image" src="images/separator.png">
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