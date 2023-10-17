<?php

    # Carrega as classes
    include 'Funcionario.php';
    include 'Estagiario.php';

    // Cria objeto Funcionario
    $pedrinho = new Funcionario();
    $pedrinho->nome = 'Pedrinho';

    // Cria objeto Estagiario
    $mariana = new Estagiario();
    $mariana->nome = '<br> Mariana';

    // Imprime propiedade nome

    echo $pedrinho->nome;
    echo $mariana->nome;

?>    

