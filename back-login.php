<?php
    session_start();
    include("connection.php");

    $email = mysqli_escape_string($conn, $_POST["email"]);
    $password = mysqli_escape_string($conn, $_POST["password"]);

    $sql = "SELECT * FROM tb_login WHERE login='".$email."' and senha='".$password."';";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) == 1) {
        $fetch = mysqli_fetch_array($query);
        foreach($fetch as $key => $value) {
            if($key == "nome"){
                $_SESSION["username"] = $value;
            } elseif ($key == "id") {
                $_SESSION["id"] = $value;
            }
        }
        $_SESSION["email"] = $email;
        header('location:logged.php');
    } else {
        $_SESSION["ERROR"] = "Usuário ou senha inválidos.";
        $_SESSION["email"] = $email;
        header("location:index.php");
    }
?>