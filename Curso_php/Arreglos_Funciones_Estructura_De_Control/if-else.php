<?php

$asientos_disponibles = 0;
$es_hijo_de_tom_holland = false;
$conoce_toni_stark = true;

if ($asientos_disponibles > 0) {
    echo "Puedes ver la pelicula de spiderman";
}else if($es_hijo_de_tom_holland ){
    echo "No te creo pero puedes ver la pelicula de spiderman";
}else if($conoce_toni_stark){
    echo "Bueno te creo adelante";
}else{
    echo "Lo sentimos no hay entradas";
}