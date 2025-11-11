<?php

$cafes = [
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
];

echo "El precio del cafe Americano es: $cafes[Americano] \n";

$personas = [
    "Carlos" => [
        "edad" => 20,
        "apellido" => "Santana"
    ],
    "Mr.Michi" => [
        "edad" => 18,
        "apellido" => "Michuchusu"
    ],
];

echo "La informacion de Mr.Michi es: Edad: " . $personas["Mr.Michi"]["edad"]. " Apellido: ". $personas["Mr.Michi"]["apellido"]. "\n";