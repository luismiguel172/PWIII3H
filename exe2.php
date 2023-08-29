<?php

    class Carro {

        var $Cor;
        var $Ano;
        var $numeoroPortas;
        var $peso;
        var $acelerar;
        var $acelerar2;

        function Acelerar()
        {
            $acelerar = 0;
            $acelerar2 = $acelerar + 5;
            print "Acelerar: " .$this->acelerar2 ."<br>";
        }

        function InformarCor()
        {
            print "Cor: " .$this->Cor ."<br>";
        }
    }
?>