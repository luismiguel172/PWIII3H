<?php

    include_once 'Funcionario.php';

    $pedro = new Funcionario();

    $pedro->setCodigo();
    $pedro->setNome();
    $pedro->setNascimento();
    $pedro->setSalario();

    echo 'Código: '.$pedro->getCodigo();
    echo 'Nome: '.$pedro->getNome();
    echo 'Nascimento: '.$pedro->getNascimento();
    echo 'Salário: R$ '.$pedro->getSalario();

?>