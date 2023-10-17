<?php

    class Estagiario extends Funcionario{

        /* Método GetSalario sobre escrito retorna o $Salário com 12% de bônus. */
        function GetSalario(){
            return $this->salario * 1.12;
        }

    }

?>    