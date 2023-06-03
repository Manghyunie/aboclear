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
<?php include 'header.php' ?>
<br><br><br><br>
<body class="body-inscription">

<form class="registration" method="post">
  <h1 class="h1-inscription">👋 Welcome !</h1>

  <label class="pure-material-textfield-outlined">
     <input placeholder=" " type="email" required>
      <span>Email</span>
  </label>

  <label class="pure-material-textfield-outlined">
    <input placeholder=" " type="password" required>
    <span>Password</span>
  </label>

  <label class="pure-material-radio">
    <input type="radio" name="type" required>
    <span>Personal Account</span>
  </label>

  <label class="pure-material-radio">
    <input type="radio" name="type" required>
    <span>Business Account</span>
  </label>

  <label class="pure-material-checkbox">
    <input type="checkbox" required>
    <span>I agree to the <a href="https://www.instagram.com/aboclear.mds/" target="_blank" title="Aboclear is the best team">Terms of Service</a></span>
  </label>

  <button class="button-inscritpion pure-material-button-contained" type="submit">Sign Up</button>

  <div class="done">
    <h1 class="h1-inscription">👌 You're all set!</h1>
    <a class="pure-material-button-text" href="javascript:window.location.reload(true)">Again</a>
  </div>
  <div class="progress">
    <progress class="pure-material-progress-circular" />
  </div>
</form>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<br><br><br>
<img class="separator-image" src="images/separator.png" alt="">
<?php include 'footer.php' ?>
</body>
</html>
