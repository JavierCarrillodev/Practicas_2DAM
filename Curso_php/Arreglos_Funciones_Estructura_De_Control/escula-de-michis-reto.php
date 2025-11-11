<?php

$escuela = [
    [
        "nombre" => "Michi mini",
        "ocupacion" => "alumno",
        "color" => "naranja",
        "comidas" => [
            "comidas_favoritas" => [
                "lasaña",
                "spaghettis",
            ],
            "comidas_que_no_les_gusta" => [
                "lentejas",
                "habichuelas",
            ],
        ],
    ],

    [
        "nombre" => "Michi chulo",
        "ocupacion" => "profesor",
        "color" => "negro",
        "comidas" => [
            "comidas_favoritas" => [
                "macarrones",
                "pizza",
            ],
            "comidas_que_no_les_gusta" => [
                "pienso",
                "habichuelas",
            ],
        ],
    ],

    [
        "nombre" => "Michi timido",
        "ocupacion" => "alumno",
        "color" => "gris",
        "comidas" => [
            "comidas_favoritas" => [
                "cocido",
                "pienso",
            ],
            "comidas_que_no_les_gusta" => [
                "lechuga",
                "coliflor",
            ],
        ],
    ],
];

var_dump($escuela);
$michi_chulo = $escuela[0]["comidas"]["comidas_favoritas"][0];

echo "Comida favorita de Michi chulo son :  $michi_chulo" . "\n";

$michi_timido_color = $escuela[2]["color"];
echo "Color de Michi chulo es :  $michi_timido_color";

