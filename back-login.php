<?php
    session_start();
    include("connection.php");

    $email = mysqli_escape_string($conn, $_POST["email"]);
    $password = mysqli_escape_string($conn, $_POST["password"]);

    $sql = "SELECT * FROM tb_users WHERE user_email='".$email."' and user_password='".$password."';";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) == 1) {
        $fetch = mysqli_fetch_array($query);
        foreach($fetch as $key => $value) {
            if($key == "user_id"){
                $_SESSION["id"] = $value;
            } elseif ($key == "user_name") {
                $_SESSION["name"] = $value;
            } elseif ($key == "user_email") {
                $_SESSION["email"] = $value;
            } elseif ($key == "user_birthday") {
                $_SESSION["birthday"] = $value;
            } elseif ($key == "user_genre") {
                $_SESSION["genre"] = $value;
            }
        }
        header('location:logged.php');
    } else {
        $_SESSION["ERROR"] = "Usuário ou senha inválidos.";
        $_SESSION["email"] = $email;
        header("location:user-session.php");
    }
?>