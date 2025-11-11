<?php


function obtener_Hora(){
    return date("H:i:s A ");
}

echo "Me podrias decir la hora \n";
echo "Claro son las " . obtener_Hora();
