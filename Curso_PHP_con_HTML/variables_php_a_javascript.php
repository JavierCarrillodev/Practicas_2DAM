<?php

$usuarios = array(
    array(
        "id" => 0,
        "username" => "Juan",
    ),
    array(
        "id" => 1,
        "username" => "Paquito",
    ),
    array(
        "id" => 2,
        "username" => "Lolito",
    ),
);
$edad_de_pepito = 12;

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pasar variables de PHP a JavaScript</title>
    </head>
    <body>

    <script>
        let users = JSON.parse('<?= json_encode($usuarios); ?>');
        console.log(users)

        let edadDePepito = <?= $edad_de_pepito ?>;
    </script>

    </body>
</html>

















