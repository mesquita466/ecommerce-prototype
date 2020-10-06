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

    // SHOW ALL REGISTERS FROM tb_login (test)

    // $sql = "SELECT * FROM tb_login;";

    // $query = mysqli_query($conn, $sql);

    // echo("<br>");
    
    // while ($user = mysqli_fetch_array($query)) {
    //     foreach($user as $key => $value) {
    //         if(!is_numeric($key)) {
    //             echo($key . " : " . $value);
    //             echo("<br>");
    //         }
    //     }
    //     echo("<br>");
    // }
?>