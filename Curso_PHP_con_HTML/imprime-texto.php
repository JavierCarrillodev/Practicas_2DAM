<?php

$nombre = "Paco"

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Imprime texto y etiquetas con PHP</title>
    </head>
    <body>
        <?php echo "<b>Hola estoy resfriado</b>" ?>

    <?= "<i>Esta es otra forma de imprimir texto y etiquetas en php</i>" ?>

    <h1>!Hola <?= $nombre ?></h1>

    </body>
</html>
