<?php
    session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title><?php echo($_SESSION["name"]); ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/logged.css">
  </head>
  <body>
    <div class="box-profile">
        <div class="box-profile-item">
            <img src="images/profile-male.png" alt="" id="profile-image">
        </div>
        <div class="box-profile-item">
            <h2><?php echo($_SESSION["name"]); ?></h2>
        </div>
        <div class="box-profile-item">
            <h5>email: <?php echo($_SESSION["email"]); ?></h5>
        </div>
        <div class="box-profile-item">
            <h5>birthday: <?php echo($_SESSION["birthday"]); ?></h5>
        </div>
        <div class="box-profile-item">
            <h5>genre: <?php echo($_SESSION["genre"]); ?></h5>
        </div>
        <div class="box-profile-item">
            <h5>id: <?php echo($_SESSION["id"]); ?></h5>
        </div>
        <div class="box-profile-item">
            <a href="back-logout.php"><button class="btn btn-dark">Log out</button></a>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>