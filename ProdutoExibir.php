<?php

    class Produto
    {
        var $Codigo;
        var $Descricao;
        var $Preco;
        var $Quantidade;
    

    function ImprimiEtiqueta()
    {
        print "Codigo: " . $this->Codigo . "<br>";
        print "Descricao: " . $this->Descricao . "<br>";
    }

    }
?>    