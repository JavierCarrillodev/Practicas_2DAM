<?php


$precio_de_cafe = [12,32,23,15,5,1];

usort($precio_de_cafe, function($a, $b){
   return $a <=> $b; // Lo que estamos para ordenar el array es que si $a es menor que $b nos devuelve un -1, si es igual devolvera 0 y si es mayor delvolvera un entero positivo ej: 1
});

var_dump($precio_de_cafe);