<?php
    session_start();
    unset($_SESSION["accesso"]);
    header("Location: index.html");
?>