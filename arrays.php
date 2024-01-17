<?php
//EX:
// $endereco = [
//     "cep" => "12121412",
//     "numero" => "123",
//     "cidade" => "Montanhas",
//     "estado" => "Rio Grande do Norte",
// ];

// print_r($endereco);
// print_r($endereco['cep']);

//===========================================

$carros = ['Ferrari','Bmw', 'Mercedes'];
//======================================

$EnderecoPessoas = [
    'pessoa1' => array(
        "cep" => "12312321",
        "cidade1" => "Salvador"
    ),
    'pessoa2'=>[
        'cep' => "12321321",
        "cidade" => "São Paulo"
    ] ,
];

if(isset($EnderecoPessoas['pessoa1']['cidade1'])){ //isset, verifica se uma variavel existe ->Se existir cidade1 dentro de pessoa1, IMPRIMA.
    print_r($EnderecoPessoas['pessoa1']['cidade1']);
}else{
    echo "Chave inválida !";
}
