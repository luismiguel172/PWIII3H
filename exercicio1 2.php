<?php

    include_once "exercicio1.php";

    $conta1 = new Conta();

    $conta1->numAge = 20;
    $conta1->numConta = 101;
    $conta1->nome = "Miguel";
    $conta1->saldo = 2000;

    $conta1->ExibeDados();