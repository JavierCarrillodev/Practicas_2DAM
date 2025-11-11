<?php



$hora = readline("Introduce las horas: ");
$hora_segundos = (int) (3600 * $hora);
echo "Horas a segundos: $hora_segundos \n";


$minutos = readline("Introduce los minutos: ");
$hora_minutos = (int) ($minutos * 60);
echo "minutos a segundos: $hora_minutos \n";

$segundos = readline("Introduce los segundos: ");
echo "segundos: $segundos \n";

$resultado_total = $hora_segundos + $hora_minutos + $segundos;
echo "Segundos totales: $resultado_total \n";