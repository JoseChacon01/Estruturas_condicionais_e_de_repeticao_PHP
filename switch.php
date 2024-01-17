<?php

$sorteio = rand(0,5); //Gera um valor inteiro randônico que varia de 0 a 5.

echo "Valor sorteado: " . $sorteio; //Imprime o valor sorteado
switch($sorteio){
   case 0:
         echo " => Você ganhou 1 ponto";
         break;
   case 1:
         echo " => Você perdeu 1 ponto";
         break;
   case 2:
         echo " => Você ganhou um bônus! parabéns ganhou 3 pontos";
         break;
   default:                             
         echo " => Jogue novamente";
         break;
   }


   //=========================================================

// $sorteio = rand(2,2);

// echo "Valor sorteado: " . $sorteio;
// switch($sorteio){
//    case 1:
//    case 2:
//          echo " => Você perdeu 1 ponto";
//          break;
//    case 3:
//          echo " => Você ganhou um bônus! parabéns ganhou 3 pontos";
//          break;
//    default:
//          echo " => Jogue novamente";
//          break;
// }




//  switch (expressão) {
// 	case valor1:
// 	case valor2:
// 	case valor3:
// 	   //primeiro código
// 	   break;
// 	case valor3:
// 	   //segundo código
// 	   break;
// }