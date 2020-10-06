<?php
    include("connection.php");

    $email = mysqli_escape_string($conn, $_POST["email"]);
    $password = mysqli_escape_string($conn, $_POST["password"]);
    $name = mysqli_escape_string($conn, $_POST["name"]);

    $sql = "SELECT * FROM tb_login WHERE login='".$email."';";
    $query = mysqli_query($conn, $sql);

    // verificando se o email já está cadastrado
    // echo(mysqli_num_rows($query));
    if(mysqli_num_rows($query) > 0) {
        $email_exists = true;
    } else {
        $email_exists = false;
        // inserindo novo usuário ao banco de dados
        $sql = "INSERT INTO tb_login(nome, login, senha)
                VALUES('". $name."', '".$email."', '".$password."');";
        mysqli_query($conn, $sql);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body class="container">
    <div class="box">
        <?php
            if (!$email_exists) {
                echo("<div class='item'>");
                echo("<h1>Success!</h1>");
                echo("</div>");
                echo("<div class='item'>");
                echo("<a href='user-session.php'><button class='btn btn-dark'>Log screen</button></a>");
                echo("</div>");
            } else {
                echo("<div class='item'>");
                echo("<h1>E-mail already registered!<h1>");
                echo("</div>");
                echo("<div class='item'>");
                echo("<a href='create_user.php'><button class='btn btn-dark'>Try again</button></a>");
                echo("</div>");
            }
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>