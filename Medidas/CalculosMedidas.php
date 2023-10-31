<?php

    class Medidas{

        public float $Numero;
        public string $MedidaAtual;
        public string $MedidaPosterior;
        protected float $Resultado;

        function __construct($Numero, $MedidaAtual, $MedidaPosterior)
        {
            $this->Numero = $Numero;
            $this->MedidaAtual = $MedidaAtual;
            $this->MedidaPosterior = $MedidaPosterior;
            $this->CalcularMedida();   
        }

        function __constructRes($Resultado)
        {
            $this->Resultado = $Resultado;
            $this->Resultado = CalcularMedida();   
        }

        private function CalcularMedida() {
            switch($this->MedidaAtual){
                case "m":
                    switch($this->MedidaPosterior){
                        case "km": return $this->Numero /1000; break;
                        case "cm": return $this->Numero * 100; break;
                        case "mm": return $this->Numero * 1000; break;
                        default: return $this->Numero; break;
                    } break;
                case "km":
                    switch($this->MedidaPosterior){
                        case "m": return $this->Numero * 1000; break;
                        case "cm": return $this->Numero * 100000; break;
                        case "mm": return $this->Numero * 1000000; break;
                        default: return $this->Numero; break;
                    } break; 
                case "cm":
                    switch($this->MedidaPosterior){
                        case "km": return $this->Numero / 100000; break;
                        case "m": return $this->Numero / 100; break;
                        case "mm": return $this->Numero * 10; break;
                        default: return $this->Numero; break;
                    } break; 
                case "mm":
                    switch($this->MedidaPosterior){
                        case "km": return $this->Numero / 1000000; break;
                        case "m": return $this->Numero / 100; break;
                        case "cm": return $this->Numero / 10; break;
                        default: return $this->Numero; break;
                    } break;       
            }
        }

        public function getNumero() {
            return $this->Numero;
        }

        public function getMedidaAtual() {
            return $this->MedidaAtual;
        }

        public function getMedidaPosterior() {
            return $this->MedidaPosterior;
        }

        public function getResultado(){
            return $this->Resultado;
        }
    }
?>