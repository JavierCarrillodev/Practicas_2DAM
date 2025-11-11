<?php

// Operador de asignación
$edad_de_jaimito = ($edad_de_pepito = 18 ) + 5;

echo "La edad de pepito es $edad_de_pepito \n";
echo "La edad de jaimito es $edad_de_jaimito ";

echo "\n";

// Operador de incremento

$contador = 1;
//$contador += 1;

$contador++;

/*
+=
-=
*=
/=
*/
echo "Contador: $contador \n";


$nombre = "Carlos";
$nombre .=  " " . "Santana";
echo $nombre . "\n";


$contador = 1;
$resultado = $contador++;

echo "Contador: $contador \n";
echo "Contador: $resultado \n";

