<?php
    session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/create.css">
</head>
  <body class="container">
    <div class="box">
        <div class="item">
            <h1>Register</h1><br>
        </div>
        <div class="box-form">
            <div class="item">
                <form action="back-create.php" method="POST">
                <!-- <label for="create-form-name">name: &nbsp;</label> -->
                <input type="text" name="name" id="create-form-name" placeholder="name" required>
            </div>
            <div class="item">
                <!-- <label for="create-form-email">email: &nbsp;</label> -->
                <input type="email" name="email" id="create-form-email" placeholder="email" required>
            </div>
            <div class="item">
                <!-- <label for="create-form-password">password: &nbsp;</label> -->
                <input type="password" name="password" id="create-form-password" placeholder="password" required>
            </div>
            <div class="item">
                <!-- <label for="birthday">birthday: &nbsp;</label> -->
                <input type="date" name="birthday" id="birthday" placeholder="birthday" require>
            </div>
            <div class="item">
                <input type="radio" name="genre" id="male" value="male">
                <label for="male">Male</label>&nbsp;
                <input type="radio" name="genre" id="female" value="female">
                <label for="female">Female</label>&nbsp;
                <input type="radio" name="genre" id="other" value="other" checked>
                <label for=" other">Other</label>&nbsp;
            </div>
            <?php
                if(isset($_SESSION["ERROR"])) {
                    echo('<div class="item" class="alert alert-danger" role="alert">
                          <div class="alert alert-danger" role="alert">'.
                          $_SESSION["ERROR"].'
                          </div>
                          </div>');
                    session_unset();
                }
            ?>
            <div class="item">
                <input type="submit" name="create" value="Create" class="btn btn-dark">
                </form>
            </div>
            <div class="item">
                <a href="user-session.php"><button class="btn btn-dark">Back</button></a>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>