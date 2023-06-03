<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Aboclear</title>
</head>
<body>
<?php include 'header.php' ?> 

<div class="container-fluid" style="position: relative; overflow: hidden;">
  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 70vh;">
    <h1 class="text-center font-weight-bold recherche-text-dark">Stories and interviews</h1>
    <div class="mt-3">
      <form class="form-inline">
        <div class="input-group rounded-pill">
          <input type="text" class="form-control rounded-pill" placeholder="enter your email">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary rounded-pill" type="button">
              Subscribe
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<br><br><br>
<img class="separator-image" src="images/separator.png" alt="">
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php' ?>
<br><br>
</body>
</html>
