<?php
if (isset($_GET['query'])) {
  $query = $_GET['query'];

  // Liste des correspondances possibles
  $correspondances = array(
    'spotify',
    'google',
    'youtube'
  );

  $meilleureCorrespondance = '';
  $distanceMinimale = PHP_INT_MAX;

  // Recherche de la meilleure correspondance
  foreach ($correspondances as $correspondance) {
    $distance = levenshtein($query, $correspondance);
    if ($distance < $distanceMinimale) {
      $distanceMinimale = $distance;
      $meilleureCorrespondance = $correspondance;
    }
  }

  // Vérification de la correspondance la plus proche
  if ($distanceMinimale <= 2) { // Vous pouvez ajuster cette valeur selon votre besoin
    header("Location: $meilleureCorrespondance.php");
    exit;
  } else {
    // Redirection vers la page d'erreur
    header('Location: erreur.php');
    exit;
  }
}
?>
<?php
if (isset($_GET['categorie'])) {
  $categorie = $_GET['categorie'];
  if ($categorie === 'categorie2') {
    header('Location: spotify.php');
    exit;
  }
}
?>
