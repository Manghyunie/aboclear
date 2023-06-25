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
    <?php include 'css/scrollorange.css' ?>#navbar {
      position: sticky;
      top: 0;
      background-color: #f3d178;
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
      width: 70%;
    }

    .second-div {
      flex: 1;
      width: 50%;
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
      top: 20px !important;
      right: 20px !important;
      max-width: 55% !important;
      height: auto;
    }

    .ajust2 {
      position: absolute;
      top: 110px !important;
      right: 10px !important;
      max-width: 36% !important;
      height: auto;
    }

    .ajust3 {
      position: absolute;
      top: 15px !important;
      right: 50px !important;
      max-width: 34% !important;
      height: auto;
    }

    .ajust4 {
      position: absolute;
      top: 15px !important;
      right: 10px !important;
      max-width: 30% !important;
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="main-div">
      <div class="row">
        <div class="first-div">
          <img class="ajust" src="images/Personnage_main_en_air.png" alt="Image 1">
          <br><br><br>
          <p><strong>Comment les<br>
              <span class="index-highlight-blue">abonnements</span><br>
              sont-ils comparés ?</strong></p><br>
          <p>Aboclear vous permet de comparer différents<br>
            abonnements d’une même thématique. A vous de<br>
            sélectionner deux marques pour les mettre en parallèle et<br>
            avoir un aperçu global de leurs différences. Notre comparateur<br>
            est optimisé et construit pour vous faciliter la tâche.</p><br>
          <p><strong>En savoir plus ➜</strong></p>
        </div>
        <div class="second-div">
          <img class="ajust2" src="images/Personnage_jambe_croisé.png" alt="Image 2">
          <br>
          <p><strong>Quels sont les termes<br>
              et les conditions<br>
              de chaque abonnement ?</strong></p>
          <p>C’est l’objectif d’Aboclear !<br>
            Vous permettre d’avoir une fiche<br>
            résumée de chaque abonnement et de ses conditions d’utilisation. Chaque abonnement est analysé et nous mettons en avant les points importants qu’il faut connaître.</p>
          <br>
          <p><strong>En savoir plus ➜</strong></p>
        </div>
      </div>
      <div class="row">
        <div class="second-div">
          <img class="ajust3" src="images/Personnage_pouce_en_l_air.png" alt="Image 3">
          <br><br><br><br>
          <p><strong>Quels sont<br>
              les avis utilisateurs sur les<br>
              abonnements ?
            </strong></p>
          <p>C’est sur ces avis que nous nous basons pour vous faire des retours. Nous utilisons des avis certifiés et sélectionnons les plus construits pour les mettre en avant sur la fiche résumée. Ainsi, vous êtes certains d’avoir des retour et de vous faire un avis juste.</p>
          <p><strong>En savoir plus ➜</strong></p>
        </div>
        <div class="first-div">
          <img class="ajust4" src="images/personnage_montre.png" alt="Image 4">
          <br><br><br><br>
          <p><strong>Y a t’il des offres spéciales,<br>
              remises ou promotion en<br>
              cours sur mes abonnements ?</strong></p><br>
          <p>Les offres spéciales sur certains abonnements sont visibles sur la fiche résumé de l'abonnement en question. La durée de l’offre, ce qu'elle entend et les conditions sont indiquées juste en dessous. Si vous souhaitez commencer un nouvel abonnement, rendez-vous sur la page “offres” qui regroupe les promotions du moment et qui sont, pour certaines, exclusives grâce à Aboclear.
          </p><br>
          <p><strong>En savoir plus ➜</strong></p>
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
</body>

</html>