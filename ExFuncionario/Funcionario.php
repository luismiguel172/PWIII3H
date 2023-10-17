<?php 

    class Funcionario{

        private $codigo;
        public $nome;
        private $nascimento;
        protected $salario;

        function setCodigo($codigo){

            if(is_numeric($codigo)&&($codigo > 0))
            {
                $this->codigo = $codigo;
            }
        }

        function getCodigo(){
            return $this->codigo;
        }

                ##########

        function setNome($nome){

            if(is_string($nome)&&($nome > 0))
            {
                $this->nome = $nome;
            }
        }

        function getNome(){
            return $this->nome;
        }

                ######

        function setNascimento($nascimento){

            if(is_numeric($nascimento)&&($nascimento > 0))
                {
                    $this->nascimento = $nascimento;
                }
            }
        
        function getNascimento(){
            return $this->nascimento;
        }

                ##########
        
        function setSalario($salario){

            if(is_numeric($salario)&&($salario > 0))
            {
                $this->salario = $salario;
            }
        }

        function getSalario(){
            return $this->salario;
        }
    }

?>