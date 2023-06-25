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
  <title>Header mobile</title>
</head>

<style>
  <?php include 'css/scrollblue.css' ?>.container {
    display: flex;
    align-items: center;
  }

  .imgcnx {
    float: left;
    width: 50%;
  }

  .cnxqst {
    float: right;
    width: 50%;
    font-family: 'Roboto', sans-serif;
    color: #000000;
  }

  .cnxqst img {
    width: 140px;
    height: auto;
  }

  .cnxqst input[type="text"],
  .cnxqst input[type="email"],
  .cnxqst input[type="tel"],
  .cnxqst input[type="password"] {
    border-radius: 20px;
    padding: 10px;
    border: 1px solid #e0e0e0;
    width: 350px;
  }

  .cnxqst input[type="submit"] {
    border-radius: 40px;
    padding: 10px;
    background-color: #000000;
    color: #ffffff;
    border: none;
    width: 130px;
  }

  .inscription-page-title {
    margin-top: 65px;
    line-height: 1.2;
  }

  .cnxqst h1 {
    font-size: 36px;
    font-weight: bold;
  }

  .logo {
    position: absolute;
    top: 15px;
    left: 20px;
    width: 110px;
  }

  .already-registered {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 14px;
  }


  .connect-link {
    text-decoration: none;
    color: #92cadb;
    font-weight: bold;
  }
</style>

<body>

  <div container>
    <div class="imgcnx">
      <a href="index.php"><img src="images/logoblack.png" alt="Logo" class="logo"></a>
      <img src="images/imagecnx.png" alt="">
    </div>
    <div class="cnxqst">
      <div class="inscription-page-title">
        <h1><strong>Inscrivez-vous<br>sur Aboclear</strong></h1><br>
      </div>
      <img src="images/googlelogo.png" alt=""><br>
      <form action="votre_script.php" method="POST">
        <br>
        <strong><label for="email">Email*</label></strong>
        <br>
        <input type="email" id="email" name="email" required>
        <br><br>
        <strong><label for="telephone">Numéro de téléphone</label></strong>
        <br>
        <input type="tel" id="telephone" name="telephone" required>
        <br><br>
        <strong><label for="motDePasse">Mot de passe*</label></strong>
        <br>
        <input type="password" id="motDePasse" name="motDePasse" required>
        <br><br>
        <strong><input type="submit" value="Connexion"></strong>
      </form>
    </div>
  </div>
  <span class="already-registered">Pas encore membre ? <a href="inscription.php" class="connect-link">Inscrivez-vous</a></span>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["motDePasse"];
    $nomprenom = $_POST["nomPrenom"];

    $query = $bdd->prepare("INSERT INTO users (email, password, nomprenom) VALUES (?, ?, ?)");
    $query->execute([$email, $password, $nomprenom]);
    var_dump($query);

    header("Location: index.php");
    exit;
  }
  ?>
</body>

</html>