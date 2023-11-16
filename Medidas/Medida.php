<?php

    if(isset($_GET['Numero'])){
        $Medidas = new Medidas($_GET['Numero'], $_GET['MedidaAtual'], $_GET['MedidaPosterior']);
        $Resultado = $Medidas->getResultado();
     } else {
         $Resultado = 0;
    }

?>