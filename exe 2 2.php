<?php

    include_once "exe2.php";

    $carro1 = new Carro();

    $carro1->Cor = "Azul";
    $carro1->Ano = 2010;
    $carro1->numeroPortas = 4;
    $carro1->peso = 2000;

    $carro1->acelerar = 100;

    $carro1->InformarCor();
    $carro1->Acelerar();

?>    