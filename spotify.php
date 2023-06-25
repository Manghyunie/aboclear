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

    .container {
      display: flex;
      align-items: center;
    }

    .subscription-list {
      max-height: 400px;
      overflow-y: auto;
    }

    .subscription-content {
      display: flex;
      align-items: center;
      border: none;
      padding: 10px;
      margin-bottom: 10px;
    }

    .subscription-image img {
      width: 100px;
      height: auto;
      margin-right: 10px;
    }

    .subscription-description h3 {
      font-size: 16px;
      margin-bottom: 5px;
    }

    .subscription-description p {
      font-size: 14px;
    }

    .subscription-button button {
      white-space: nowrap;
      padding: 5px 10px;
      background-color: black;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 20px;
    }

    .spotify-container {
      margin-left: 70px;
      
      margin-right: 400px;
    }

    .ajust2 {
      position: absolute;
      top: 220px !important;
      right: 15px !important;
      max-width: 29% !important;
      border-radius: 25px;
      height: auto;
    }

    .buttonoffre {
      border-radius: 20px;
      background-color: black;
    }

    .custom-button {
      padding: 5px 10px;
      background-color: black;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 20px;
     
    }

    .subscription-button {
      white-space: nowrap;
      padding: 5px 10px;
      background-color: black;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 20px;
    }

    .subscription-button a {
  text-decoration: none; 
  outline: none; 
  background-color: transparent; 
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
  <div class="container">
    <br><br><br><br><br><br>
    <div class="spotify-search-bar">
      <form class="ravancee-search-bar2" action="rechercher.php" method="GET">
        <input type="text" name="query" class="ravancee-search-input2 rounded-pill" placeholder="Spotify">
        <button type="submit" class="index-search-button2"><strong class="allonsy">Allons-y !!</strong></button>
      </form>
    </div>
    <div class="spotify-dropdowns">
      <select class="spotify-dropdown">
        <option value="popularite">Popularité</option>
        <option value="nom">4-5⭐</option>
        <option value="date">3-4⭐</option>
        <option value="date">- 3⭐</option>
      </select>
      <select class="spotify-dropdown">
        <option value="nomcat">Catégorie</option>
        <option value="categorie1">Streaming</option>
        <option value="categorie2">Musique</option>
        <option value="categorie3">Sport</option>
        <option value="categorie4">Restauration</option>
        <option value="categorie5">Gaming</option>
        <option value="categorie6">Transport</option>
        <option value="categorie7">Téléphonie</option>
      </select>
      <select class="spotify-dropdown">
        <option value="prix">Prix</option>
        <option value="0-50">0 - 10 €</option>
        <option value="50-100">10 - 20 €</option>
        <option value="100-200">30 - 50 €</option>
        <option value="100-200">50 - 100 €</option>
      </select>
    </div>
  </div>

  <div class="spotify-container subscription-list">
    <a href="https://www.radiofrance.fr/mouv">
      <img class="ajust2" src="images/addmouv.png">
    </a>
    <div class="subscription-item">
      <div class="subscription-content">
        <div class="subscription-image">
          <img src="images/spotifylogo.png">
        </div>
        <div class="subscription-description">
          <h3>Spotify</h3>
          <p>Spotify est une plateforme de streaming musical populaire qui permet aux utilisateurs d'accéder à une vaste bibliothèque de musique, de découvrir de nouveaux artistes et de créer des playlists personnalisées</p>
        </div>
        <div class="subscription-button">
          <div class="text-center"><strong>9,99€</strong></div>
          <a href="offrespotify.php" class="button custom-button">Voir l'offre</a>
        </div>
      </div>
    </div>


    <div class="subscription-item">
      <div class="subscription-content">
        <div class="subscription-image">
          <img src="images/deezerlogo.png">
        </div>
        <div class="subscription-description">
          <h3>Deezer</h3>
          <p>Deezer est une plateforme de streaming musical qui offre aux utilisateurs un accès à une immense collection de chansons, des recommandations personnalisées et la possibilité de créer et partager des playlists selon leurs préférences musicales</p>
        </div>
        <div class="subscription-button">
          <div class="text-center"><strong>10,99€</strong></div>
          <button>Voir l'offre</button>
        </div>
      </div>
    </div>

    <div class="subscription-item">
      <div class="subscription-content">
        <div class="subscription-image">
          <img src="images/ytbmusiclogo.png">
        </div>
        <div class="subscription-description">
          <h3>Youtube Music</h3>
          <p>YouTube Music est une plateforme de streaming qui offre aux utilisateurs un accès à une vaste collection de chansons, de vidéos musicales, de performances en direct et des recommandations personnalisées, leur permettant de profiter de la musique dans différents genres et de créer des playlists personnalisées</p>
        </div>
        <div class="subscription-button">
          <div class="text-center"><strong>11,99€</strong></div>
          <button>Voir l'offre</button>
        </div>
      </div>
    </div>

    <div class="subscription-item">
      <div class="subscription-content">
        <div class="subscription-image">
          <img src="images/amzmusiclogo.png">
        </div>
        <div class="subscription-description">
          <h3>Amazon Music</h3>
          <p>Amazon Music est une plateforme de streaming musical qui propose aux utilisateurs un large choix de chansons, d'albums et de playlists, ainsi que des recommandations personnalisées, leur permettant de profiter de la musique selon leurs goûts et préférences</p>
        </div>
        <div class="subscription-button">
          <div class="text-center"><strong>9,99€</strong></div>
          <button>Voir l'offre</button>
        </div>
      </div>
    </div>
  </div>

  <img class="index-separator-image" src="images/separator.png">
  <div class="index-footer-container">
    <?php include 'footer.php' ?>
  </div>

  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>