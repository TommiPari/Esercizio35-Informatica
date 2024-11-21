<?php
    session_start();
    if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
        header("Location: errore.html");
    }
    if (!isset($_SESSION["accesso"])) {
        $_SESSION["accesso"] = time();
    }
    $now = time();
    if ($now - $_SESSION["accesso"] >= 20) {
        header("Location: sessione_scaduta.php");
    }
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
    <div class="titolo">
        <h1>Benvenuto!</h1>
    </div> <br>
    <div class="divCentrale">
        <p>Tommaso</p>
        <p>Parigi</p>
        <p>5 Marzo 2006</p>
        <p>Data d'accesso: <?php echo date("d/m/Y h:i:s", $_SESSION["accesso"]) ?></p>
        <form action="./script_logout.php">
            <button type="submit">Logout</button> <br>
        </form>
    </div>
</body>
</html>