<?php
    session_start();
    include("connection.php");

    $name     = mysqli_escape_string($conn, $_POST["name"]);
    $email    = mysqli_escape_string($conn, $_POST["email"]);
    $password = mysqli_escape_string($conn, $_POST["password"]);
    $birthday = mysqli_escape_string($conn, $_POST["birthday"]);
    $genre    = mysqli_escape_string($conn, $_POST["genre"]);

    $sql = "SELECT * FROM tb_users WHERE user_email='".$email."';";
    $query = mysqli_query($conn, $sql);

    // echo(mysqli_num_rows($query));

    // verify if the email is already registered
    if(mysqli_num_rows($query) > 0) {
        $_SESSION["ERROR"] = "E-mail is not available.";
        header("location:create-user.php");
    } else {
        // insert new user on db
        $sql = "INSERT INTO tb_users(user_name, user_email, user_password, user_birthday, user_genre)
                VALUES('". $name."', '".$email."', '".$password."', '".$birthday."', '".$genre."');";
        mysqli_query($conn, $sql);
        $_SESSION["SUCCESS"] = "Registered successfully";
        header("location:user-session.php");
    }
?>