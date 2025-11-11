<?php


//function suma ($a = 1, $b = 1) {
//    echo "La suma de $a + $b es: " . $a + $b . "\n";
//}
//suma();

$array1 = [1,2,3];
$array2 = [4,5,6];

//$resultado = [...$arreglo1, ...$arreglo2];
//var_dump($resultado);

//function suma ($a, $b) {
//    echo "La suma de $a + $b es: " . $a + $b . "\n";
//}
//$numeros = [1,2];
//$numeros2 = [50,100];
//$numeros3 = [2000,20];
//
//// Al poner los tres puntos por parametros decimos que a = 1, b = 2 y se le asignan solo los numeros
//suma(...$numeros);
//suma(...$numeros2);
//suma(...$numeros3);

function suma_infinita(... $params){
    $suma = 0;

    foreach ($params as $numero) {
        $suma += $numero; // Recorremos el array y sumamos
    }
    echo "La suma total es: $suma \n";
}
suma_infinita(1,2);
suma_infinita(1,2,3);
suma_infinita(100,40,2,9,3);