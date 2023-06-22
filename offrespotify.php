<?php
//------------------------------------------------------------
error_reporting(E_ALL);
ini_set("display_errors", 1);
//------------------------------------------------------------

require('cnx/cnx.php');


?>
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
        <?php include 'css/scrollgreen.css' ?>#navbar {
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
            align-items: flex-start;
            gap: 40px;
            padding: 50px 80px;
        }

        .text-container {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }

        .text-container h1 {
            font-size: 50px;
            font-weight: bold;
        }

        .text-container p {
            font-size: 16px;
            margin-top: 10px;
        }

        .content {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
        }

        .image {
            margin-right: 20px;
        }

        .image img {
            width: 200px;
            /* Définissez la largeur souhaitée */
            height: auto;
            /* Maintient le rapport hauteur/largeur */
        }

        .buttons {
            display: flex;
            flex-direction: column;
            border-radius: 10px;
        }

        .buttons button:first-of-type {
            background-color: #8fc6d7;
            color: white;
            border-radius: 10px;
            border: none;
        }

        .buttons button:last-child {
            background-color: #f2d177;
            color: white;
            border-radius: 10px;
            border: none;
        }

        .buttons button {
            margin-bottom: 10px;
        }

        .buttons .button {
            height: 40px;
        }

        .text {
            flex: 1;
        }

        .text-container .category {
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: bold;
        }

        .text-container .streaming {
            background-color: #66BB6A;
            /* Couleur verte pour "streaming" */
            color: white;
        }

        .text-container .musique {
            background-color: #FF4081;
            /* Couleur rose pour "musique" */
            color: white;
        }

        .pointspn {
            display: flex;
        }

        .h1noir {
            color: black;
        }

        .new-section {
            background-color: black;
            padding: 50px;
            display: flex;
            /* Ajout de la propriété display: flex */
            justify-content: center;
            /* Centre les éléments horizontalement */
            align-items: center;
            /* Centre les éléments verticalement */
        }

        .white-square {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }

        .white-square {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            margin-right: 20px;
        }

        .square-content {
            display: flex;
            align-items: flex-start;
        }

        .square-content .image {
            margin-right: 10px;
        }

        .square-content .image img {
            width: 50px;
            height: 50px;
        }

        .square-content .text h3 {
            margin-top: 0;
        }

        .button {
            margin-top: 10px;
        }

        .button-style {
            background-color: #8fc6d7;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            outline: none;
        }




        .fntblanc {
            color: white;
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
                <img class="index-inscription-button" src="images/inscription_green.png" alt="Inscription">
            </a>
        </div>
    </div>
</header>

<?php
$sql = "SELECT a.positif as positif, a.negatif as negatif FROM abonnements a";
$result = $bdd->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
?>

<body>
    <div class="container">
        <div>
            <div class="image">
                <img src="images/spotifylogo.png" alt="Ma photo">
            </div>
            <div class="buttons">
                <br>
                <button class="button">Aller sur le site</button>
                <button class="button">Voir les conditions en détail</button>
            </div>
        </div>
        <div class="text-container content">
            <h1 class="h1noir">Spotify</h1>
            <br>
            <p>Spotify est une plateforme de streaming musical populaire qui permet aux utilisateurs d'accéder à une vaste bibliothèque de musique, de découvrir de nouveaux artistes et de créer des playlists personnalisées</p>
            <p><strong>Catégories</strong></p>
            <p><span class="category streaming">streaming</span>
                <span class="category musique">musique</span>
            </p>
            <div class="pointspn">
                <div class="ptnpositif">
                    <p><span><img src="images/like" width="20" alt=""></span>&nbsp;Points Positifs</p>
                    <ul class="list-style-positif">
                        <?php echo $row['positif']; ?>
                    </ul>
                </div>
                <div class="ptnnegatif">
                    <p><span><img src="images/dislike" width="20" alt=""></span>&nbsp;Points Négatifs</p>
                    <ul class="list-style-negatif">
                        <?php echo $row['negatif']; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="new-section">
            <div>
                <span class="fntblanc"><strong>L'abonnement</strong></span>
                <div class="white-square">
                    <div class="square-content">
                        <div class="image">
                            <img src="images/spotifylogo.png" alt="Description de l'image">
                        </div>
                        <div class="text">
                            <h3>Spotify</h3>
                            <p>- Vaste bibliotheque musicale<br>
                                - Recommendations basees sur les gouts de l'utilisateur<br>
                            - bonne qualité audio</p>
                        </div>
                    </div>
                    <div class="button">
                        <a href="#" class="button-style">9,99/mois</a>
                    </div>
                </div>
            </div>
            <div>
                <span class="fntblanc"><strong>Comparer</strong></span>
                <div class="white-square">
                    <div class="square-content">
                        <div class="image">
                            <img src="images/deezerlogo.png" alt="Description de l'image">
                        </div>
                        <div class="text">
                            <h3>Deezer</h3>
                            <p>- La bibliotheque peut varier selon la region<br>
                                - Recommendations moins intuitives mais presentes<br>
                            - Experience d'ecoute plus immersive</p>
                        </div>
                    </div>
                    <div class="button">
                        <a href="#" class="button-style">10,99/mois</a>
                    </div>
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