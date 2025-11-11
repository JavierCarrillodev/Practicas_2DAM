<?php


$edades = [20,18,40,33];

//Count
echo count($edades) . "\n";

// array_push para introducir datos al array
array_push($edades,13);
var_dump($edades);

// is_array
$esto_no_es_un_arreglo = "";
var_dump(is_array($edades));

// explode convertimos un string a un array
$lista_de_frutas = "fresa,cereza,manzana";
$lista_de_frutas = explode(",", $lista_de_frutas);
var_dump($lista_de_frutas);

// implode
$lista_de_frutas = ["fresa","cereza","manzana"];
$lista_de_frutas = implode(",", $lista_de_frutas);
var_dump($lista_de_frutas);