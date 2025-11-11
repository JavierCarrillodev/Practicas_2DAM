<?php

$dineroStreamer = readline("Cuanto dinero tienes en las donaciones:");

if ($dineroStreamer >= 100){
    echo "Puedes retirar el dinero porque tienes $dineroStreamer";
}else{
    echo "No puedes retirar el dinero porque tienes $dineroStreamer y hace falta 100€ o mas";
}
