<?php

$name = $_POST["nombre"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

$htmlentities = htmlentities($name);
$addslashes = addcslashes($username);
$onlyWords = preg_replace('/\d/', ' ', $username);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datos de mi usuario</title>
</head>
    <body>

    <p>Nombre:</p>
    <?= $htmlentities ?>

    <p>Username:</p>
    <?= $addslashes ?>



    </body>
</html>
