<?php

// $arrayNumeros = [3,4,2,5,1];

// $qtd_elementos_array = count($arrayNumeros);

// for ($i=0; $i < $qtd_elementos_array; $i++ ){
//     print_r($arrayNumeros[$i]); //Imprime todos os valores nas posições do array
// }




//========================EX: 2 -> BubbleSort -> Realizar o exemplo de java=======================




$arr = [0,3,7,1];
//var_dump($arr[0]); //A função var_dump() é usada para despejar informações sobre uma variável

$qtd_elementos_array = count($arr); // armazena a quantidade de elementos do array = 4

// $i =1
// $posicaoAtual = 0

for ($i=0; $i< $qtd_elementos_array -1; $i++) {
    for ($PosicaoAtual=0; $PosicaoAtual<$qtd_elementos_array -$i -1; $PosicaoAtual++) {  //EXEMPLO 1

        $ProximaPosicao = $PosicaoAtual+1; // 3

        if ($arr[$ProximaPosicao] < $arr[$PosicaoAtual]) {

            $auxiliar = $arr[$PosicaoAtual]; // 5
            $arr[$PosicaoAtual] = $arr[$ProximaPosicao] ;
            $arr[$ProximaPosicao] = $auxiliar;
        }
    }
}

// for ( $i = 0; $i < $qtd_elementos_array - 1; $i++){ // EXEMPLO 2 

//     if ($arr[$i] > $arr[$i + 1]){
//         $aux = $arr[$i];
//         $arr[$i] = $arr[$i + 1];
//         $arr[$i + 1] = $aux;
    
//      }
//     }

print_r($arr) . "\n";

//FUNÇÃO PRONTA PARA ORDENAÇÃO:
// sort($arr);
// print_r($arr);

