<?php

$frutas = ["banana","maça", "pera","uva"];

$contador = count($frutas);



$i = 3;

do { //Codigo é executado ao menos 1 vez, antes de verificar a condição.
    
    echo $frutas[$i] . "\n";

    $i++;

} while ($i < $contador);



