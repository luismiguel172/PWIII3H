<?php

    $conta_carlos = new Conta;
    $conta_carlos->Agencia = 6677;
    $conta_carlos->Codigo = "CC.1234.56";
    $conta_carlos->DataDeCriacao = "10/07/02";
    $conta_carlos->Titular = $carlos;
    $conta_carlos->Senha = 9876;
    $conta_carlos->Saldo = 567.89;
    $conta_carlos->Cancelada = false;

    echo "\n";
    echo "Manipulando a conta de: {$conta_carlos->Titular->Nome} \n";
    echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n";

    $conta_carlos->Depositar(20);
    echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n";

    $conta_carlos->Retirar(10);
    echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n";