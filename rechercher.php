<?php
if (isset($_GET['query'])) {
  $query = $_GET['query'];

  // Effectuez les vérifications et les correspondances appropriées ici
  if ($query == 'spotify') {
    header('Location: spotify.php');
    exit;
  } elseif ($query == 'google') {
    header('Location: google.php');
    exit;
  } elseif ($query == 'youtube') {
    header('Location: youtube.php');
    exit;
  }
}
?>
