<?php

$arr = [1,2,3,4,5,6,7,8,9,10];

$qtd_elementos_array = count($arr); 

// foreach ($arr as $value){ //foreach=> Significa "para cada", sendo assim, para cada elemento do array ele vai ele vai atribuir o valor do elemento a variavel $value.
//     echo $value . "\n" 
// }

foreach ($arr as $indice => $value) { //Nesse formato é apresentado a posição do array e seu valor

    // if ($value == 2){  //EXEMPLO DE PARADA: QUANDO $value = 2, PARE O LOOP.
    //     break;
    // }

    if ($value % 2 == 0){ //EXEMPLO DE CONTINUAÇÃO: QUANDO ENCONTAR ALGUM NÚMERO PAR "PULE ELE" E EXIBA O PROXIMO.
        continue;
    }

    echo "valor do índice : ". $indice . " valor : " . $value . "\n";
}
