<?php
    session_start();
    $username = "admin";
    $password = "1234";
    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        $_SESSION["login"] = true;
        header("Location: benvenuto.php");
    } else {
        $_SESSION["login"] = false;
        header("Location: errore.html");
    }
?>