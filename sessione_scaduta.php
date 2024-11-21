<?php
    session_start();
    unset($_SESSION["accesso"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1 style="color: red;">Sessione scaduta!</h1>
    <b href="./script_logout.php">Logout</a> <br>
</body>
</html>