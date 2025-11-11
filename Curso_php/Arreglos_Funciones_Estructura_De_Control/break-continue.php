<?php

$tienda_cafe = [
    "Americano" => 28,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24,
];
// break
foreach ($tienda_cafe as $cafe => $price ){
    echo "Encontré al cafe $cafe en cuestion cuesta $price € \n";

    if ($cafe == "Latte"){
        echo "Encontramos a late";
        break;
    }
}

// continues
foreach ($tienda_cafe as $cafe => $price ){

    if ($cafe == "Recalentado"){
        continue;
    }
    echo "El cafe $cafe esa bueno \n";
}