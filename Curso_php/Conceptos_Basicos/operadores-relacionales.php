<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == Igual

var_dump ($a == $b);
var_dump($a == $b2);
echo "\n";

// === Idéntico
var_dump($a === $b);
var_dump($a === $b2);
echo "\n";

// != Diferente
var_dump($a != $b);
var_dump($a != $b2);
echo "\n";

// !== Diferente
var_dump($a !== $b);
var_dump($a !== $b2);
echo "\n";

// < Menor que
var_dump($a <= $b);
var_dump($c < $b);
var_dump($d < $b);
echo "\n";

// > Meyor que
var_dump($a > $b);
var_dump($c > $b);
var_dump($d > $b);
echo "\n";


// >= Mayor o igual que
var_dump($a >= $b);
var_dump($c >= $b);
var_dump($d >= $b);
echo "\n";

// <= Mayor o igual que
var_dump($a <= $b);
var_dump($c <= $b);
var_dump($d <= $b);
echo "\n";

/*
<=> Nave espacial
Si el numero de la izquierda es mayor que el de la derecha nos devolvera 1
Si los dos numeros son iguales nos dara 0
Si el numero de la izquierda es menor que el de la derecha nos dara -1
*/
echo 2 <=> 1; // 1
echo "\n";

echo 1 <=> 1; // 0
echo "\n";

echo -50 <=> 1; // -1
echo "\n";

echo "\n";


// ?? Fusion de null

$edad_de_pepito = 23;

echo $edad_de_juanito ?? $edad_de_pepito ?? $edad_de_jaimito;