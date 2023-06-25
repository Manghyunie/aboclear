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
    <?php include 'css/scrollblue.css' ?>#navbar {
      position: sticky;
      top: 0;
      background-color: #FFFFFF;
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

    .ravancee-dropdowns {
      display: flex;
      align-items: center;
      flex: 1;
    }

    .ravancee-dropdown {
      margin-left: 10px;
      border-radius: 20px;
      padding: 5px 10px;
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
        <img class="index-inscription-button" src="images/inscription_blue.png" alt="Inscription">
      </a>
    </div>
  </div>
</header>

<body>
  <div class="container-fluid ravancee-section1" style="position: relative; overflow: hidden;">
    <div class="ravancee-page-title">
      <span class="index-highlight">Oops ! </span>Il semble que nous<br>
      n'ayons pas encore ajouté<br>
      cet abonnement<br></span>
    </div><br><br><br>
    <form class="ravancee-search-bar2" action="rechercher.php" method="GET">

      <input type="text" name="query" class="ravancee-search-input2 rounded-pill" placeholder="Un abonnement...">

      <button type="submit" class="index-search-button2"><strong class="allonsy">Allons-y !!</strong>
      </button>
    </form><br>
    <div class="ravancee-dropdowns" style="display: flex;">
      <div style="margin-left: 265px;">
        <select class="ravancee-dropdown">
          <option value="popularite">Popularité</option>
          <option value="nom">4-5⭐</option>
          <option value="date">3-4⭐</option>
          <option value="date">- 3⭐</option>
        </select>
        <select id="categorie-select" class="ravancee-dropdown">
          <option value="nomcat">Catégorie</option>
          <option value="categorie1">Streaming</option>
          <option value="categorie2">Musique</option>
          <option value="categorie3">Sport</option>
          <option value="categorie4">Restauration</option>
          <option value="categorie5">Gaming</option>
          <option value="categorie6">Transport</option>
          <option value="categorie7">Téléphonie</option>
        </select>
        <select class="ravancee-dropdown">
          <option value="prix">Prix</option>
          <option value="0-50">0 - 10 €</option>
          <option value="50-100">10 - 20 €</option>
          <option value="100-200">30 - 50 €</option>
          <option value="100-200">50 - 100 €</option>
        </select>
      </div>
    </div>
    <script>
      var selectElement = document.getElementById('categorie-select');
      selectElement.addEventListener('change', function() {
        var selectedValue = selectElement.value;
        if (selectedValue === 'categorie2') {
          window.location.href = 'spotify.php';
        }
      });
    </script><br><br><br><br><br><br><br><br>
  </div>
  <img class="index-separator-image" src="images/separator.png">
  <div class="index-footer-container">
    <?php include 'footer.php' ?>
  </div>

  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>