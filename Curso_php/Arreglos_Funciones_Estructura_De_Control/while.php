<?php

// do-while
$usernames = ["Pepito123","Javi","Victoria"];
do{
    $username = readline("Ingresa tu nuevo nombre: \n");

}while (in_array($username, $usernames));