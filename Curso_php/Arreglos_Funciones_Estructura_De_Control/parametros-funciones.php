<?php

function es_estudiante_legend($platzi_rank){
    if ($platzi_rank >= 2000){
        echo "Eres un estudiante Legend \n";
    }else{
        echo "Lo sentimos, no eres estudiante Legend\n2";
    }
}
do {
    $platzi_rank_user = (int)readline("Dime cual es tu Platzi Rank: ");
    es_estudiante_legend($platzi_rank_user);
}while(true);