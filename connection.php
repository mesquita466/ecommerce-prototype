<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "bdti95";

    $conn = mysqli_connect($server, $user, $password, $db_name);

    if(!$conn) {
        die("Error MySQL connect: " . mysqli_connect_error() . " - " . mysqli_connect_errno());
    } else {
        // echo("success");
    }
?>