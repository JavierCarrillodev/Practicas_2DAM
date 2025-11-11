<?php


function clear(){
    if (PHP_OS == "WINNT"){
        system("cls");
    }else{
        system("clear");
    }

}
$possible_word = ["Bebida","Prisma","Ala","Dolor","Piloto","Baldosa","Terremoto","Asteroide","Gallo","Platzi"];

define("MAX_ATTEMPS", 6);

echo " ------- Juego del ahorcado ------- \n";

// Inicializamos el juegos
$choose_word = $possible_word[rand(0,9)]; // Elegimos una palabra random de nuestro array del 1 al 9
$choose_word = strtolower($choose_word);// Pasamos las palabras a minusculas
$word_length = strlen($choose_word); // Tamaño de la palabra
$discovered_letters = str_pad("", $word_length, "_");
$attemps = 0;

do{
    echo "Palabra de $word_length letras \n";
    echo $discovered_letters . "\n\n";

    // Pedimos al usuario que escriba
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    if (str_contains($choose_word, $player_letter)) {
        // Verificamos todas las ocurrencias de esta letra para reemplazarla
        $offset = 0;
        while (($letter_position = strpos($choose_word, $player_letter, $offset)) !== false) {

            $discovered_letters[$letter_position] = $player_letter;
            $offset = $letter_position + 1;
        }
    }else{
        clear();
         $attemps++;
         echo "Letra incorrecta te quedan " . (MAX_ATTEMPS - $attemps) . " intentos" . "\n" ;
         sleep(0.5);
    }
    clear();

}while ($attemps < MAX_ATTEMPS && $discovered_letters != $choose_word);
clear();

if ($attemps < MAX_ATTEMPS){
    echo "Felicidades has adivinado la palabra!!!";
}else{
    echo "Suerte para la proxima \n";
}
echo "La palabra era: $choose_word \n";
echo "Tu descubriste $discovered_letters \n";