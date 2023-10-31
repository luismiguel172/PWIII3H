<?php 

    if(isset($_GET['Valor'])){
        $Gorjeta = new Gorjeta($_GET['Valor'], $_GET['Qualidade']);
        $ValorGorjeta = $Gorjeta->getValorGorjeta();
        $ValorTotal = $Gorjeta->getValorTotal();
    } else {
        $ValorGorjeta = 0;
        $ValorTotal = 0;
    }
    
?>