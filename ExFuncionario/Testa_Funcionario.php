<?php

    include_once 'Funcionario.php';

    $funcionario = new Funcionario();

    $funcionario->setCodigo($_POST['codigo']);
    $funcionario->setNome($_POST['nome']);
    $funcionario->setNascimento($_POST['nascimento']);
    $funcionario->setSalario($_POST['salario']);

    echo 'Código: '.$funcionario->getCodigo() ;
    echo '<br> Nome: '.$funcionario->getNome();
    echo '<br> Nascimento: '.$funcionario->getNascimento();
    echo '<br> Salário: R$ '.$funcionario->getSalario();

?>