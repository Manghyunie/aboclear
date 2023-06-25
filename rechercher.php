<?php
if (isset($_GET['query'])) {
  $query = $_GET['query'];

  $correspondances = array(
    'spotify',
    'google',
    'youtube'
  );

  $meilleureCorrespondance = '';
  $distanceMinimale = PHP_INT_MAX;

  foreach ($correspondances as $correspondance) {
    $distance = levenshtein($query, $correspondance);
    if ($distance < $distanceMinimale) {
      $distanceMinimale = $distance;
      $meilleureCorrespondance = $correspondance;
    }
  }

  if ($distanceMinimale <= 2) {
    header("Location: $meilleureCorrespondance.php");
    exit;
  } else {
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
