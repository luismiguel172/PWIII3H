<?php

    include_once "produto.php";

    $valor1 = new Produto();
    $valor2 = new Produto();

    $valor1->Codigo = 4011;
    $valor1->Descricao = "Cd the best of Imagine Dragons";

    $valor2->Codigo = 4012;
    $valor2->Descricao = "Cd the best of ColdPlay";

    $valor1->ImprimiEtiqueta();
    $valor2->ImprimiEtiqueta();
?>
