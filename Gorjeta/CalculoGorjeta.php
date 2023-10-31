<?php

    Class Gorjeta{

        public float $Valor;
        public string $Qualidade;
        protected float $ValorGorjeta;
        protected float $ValorTotal;

        function __construct($Valor, $Qualidade)
        {
            $this->Valor = $Valor;
            $this->Qualidade = $Qualidade;
            $this->CalcularValorGorjeta();
        }

        private function CalcularValorGorjeta() {
            $this->ValorGorjeta = $this->Valor * ($this->Qualidade / 100);
            $this->ValorTotal = $this->Valor + $this->ValorGorjeta;
        }

        public function getValor() {
            return $this->Valor;
        }

        public function getValorGorjeta(){
            return $this->ValorGorjeta;
        }

        public function getValorTotal() {
            return $this->ValorTotal;
        }

    }

?>