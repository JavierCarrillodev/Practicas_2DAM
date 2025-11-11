<?php

$tienda_cafe = [
    "Americano" => 28,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24,
];

foreach ($tienda_cafe as $cafe => $price ){
    echo "El café $cafe en cuestion cuesta $price € \n";
}