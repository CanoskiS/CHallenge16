<?php

require_once __DIR__ . "./connection/connect.php";
require_once __DIR__ . "./connection/create.php";


$id = isset($_GET["id"]);

$sql = "SELECT * FROM website WHERE id = {$id}";

$stmt = $connect->query($sql);

if ($stmt->rowCount() == 0) {
  header("Location: ./index.html");
  die();
}

while ($row = $stmt->fetch()) {

  $webpage[] = $row;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Website</title>

  <!--Bootstrap CND -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- Local CSS -->
  <link rel="stylesheet" href="./assets/style.css" />

  <!-- Latest Font-Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body>

  <?php foreach ($webpage as $page) { ?>

    <nav class="navbar navbar-expand-lg bg-dark text-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#home">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#aboutUs">About Us</a>
          <a class="nav-item nav-link" href="#services"><?= $page['services'] ?></a>
          <a class="nav-item nav-link" href="#contact">Contact</a>
        </div>
      </div>
    </nav>
  <?php }; ?>

  <?php foreach ($webpage as $page) { ?>
    <div class="cover_photo" id='home'>
      <?php echo "<div style='
                background: url(\"$page[cover_img_ur]\");
                background-repeat: no-repeat;
                min-height: 70vh;
                background-size: cover;
                ;'
                </div>" ?>
      <h1 class="text-center text-white text-uppercase"><?= $page['title'] ?></h1>
      <h3 class="text-center text-white"><?= $page['subtitle'] ?></h3>
    </div>
  <?php }; ?>

  <?php foreach ($webpage as $page) { ?>
    <div>
      <div class="container d-flex flex-column justify-content-center align-items-center my-5">
        <div class="row">
          <div class="col-12 text-center">
            <h3 class="pt-3">About Us</h3>
            <p><?= $page['about_you'] ?></p>
          </div>
          <hr>
          <div class="col-12 text-center">
            <p>Phone number:</p>
            <p><?= $page['phone_no'] ?></p>
            <p>Location:</p>
            <p><?= $page['location'] ?></p>
          </div>
        </div>
      </div>
    </div>
  <?php }; ?>

  <?php foreach ($webpage as $page) { ?>
    <div id="services">
      <div class="container">
        <h3 class="text-center"><?= $page['services'] ?></h3>
        <div class="row">
        
          <div class="card col-4">
            <img class="card-img-top img-responsive img-fluid" src="<?= $page['img_url1'] ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Service one description</h5>
              <p class="card-text"><?= $page['description1'] ?></p>
            </div>
          </div>
          <div class="card col-4">
            <img class="card-img-top img-responsive img-fluid" src="<?= $page['img_url2'] ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Service two descritpion</h5>
              <p class="card-text"><?= $page['description2'] ?></p>
            </div>
          </div>
          <div class="card col-4">
            <img class="card-img-top img-responsive img-fluid" src="<?= $page['img_url3'] ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Service three description</h5>
              <p class="card-text"><?= $page['description3'] ?></p>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  <?php }; ?>

  <?php foreach ($webpage as $page) { ?>
    <div id='contact' class="py-5">
      <div class="container">
        <h2 class="text-center py-5">Contact</h2>
        <div class="row">
          <div class="col-md-6">
            <h4>Contact</h4>
            <p><?= $page['company_description'] ?></p>
          </div>
          <div class="col-md-6 border border-dark rounded p-3">
            <form class="">
              <div class="form-group">
                <label for="name"><b>Name</b></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your name...">
              </div>
              <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your email...">
              </div>
              <div class="form-group">
                <label for="msg"><b>Message</b></label> <br>
                <textarea class="form-control mb-3" name="msg" id="msg" cols="10" rows="5" placeholder="Send you feedback please..."></textarea>
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-info">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php }; ?>


  <footer class="bg-dark text-center text-light">
    <div class="container py-3 d-flex flex-column justify-content-center align-items-center">
      <div class="row">
        <div class="col-12 text-center">
          <p>Copyright by CanoskiS @ <a href="https://brainster.co/" target="_blank">Brainster</a> </p>
        </div>
        <div class="col-12">
          <?php foreach ($webpage as $page) { ?>
            <div class="text-center icons">
              <a href="<?= $page['linkedin'] ?>>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
              <a href="<?= $page['facebook'] ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="<?= $page['twitter'] ?>" target="_blank"><i class="fa-brands fa-twitter-square"></i></a>
              <a href="<?= $page['instagram'] ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
      <?php }; ?>
      </div>
    </div>
  </footer>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>