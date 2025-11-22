<?php

$se_hablo_de_bruno = true;

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Condicionales</title>
    </head>
    <body>
    <!-- ESTO NO SE DEBE DE HACER -->
    <h1>ESTO NO SE DEBE DE HACER</h1>
        <?php if ($se_hablo_de_bruno){
            echo "<b>Wow como lo sabes</b>";

        }else{
            echo "<b>Jaja no te has enterado</b>";
        }

        ?>

    <!-- ESTO ES ACEPTABLE -->
    <h1>Esto es aceptable</h1>
    <?php if ($se_hablo_de_bruno){ ?>
        <b>Wow como lo sabes</b>

    <?php }else{ ?>
        <b>Jaja no te has enterado</b>
   <?php } ?>

    <!-- ASÍ SI SE HACE -->
    <h1>ASÍ SI SE HACE</h1>
    <?php if ($se_hablo_de_bruno):?>
        <b>Wow como lo sabes</b>
    <?php else : ?>
    <b>Jaja no te has enterado</b>
    <?php endif; ?>




    </body>
</html>