<?php
    session_start();
    session_unset();
    header("location:user-session.php");
?>