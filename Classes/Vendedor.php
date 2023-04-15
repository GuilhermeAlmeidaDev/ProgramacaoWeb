<?php
    include("Funcionario.php");
    
    class Vendedor extends Funcionario {

        public function __construct($nome, $rg, $cpf){
            $this->nome = $nome;
            $this->rg = $rg;
            $this->cpf = $cpf;
        }

        private string $nome;
        private string $rg;
        private string $cpf;

        public function getNomeVendedor():string{
            return $this->nome;
        }
        public function setNomeVendedor(string $nome):void{
            $this->nome=$nome;
        }

        public function getRgVendedor():string{
            return $this->rg;
        }
        public function setRgVendedor(string $rg):void{
            $this->rg=$rg;
        }

        public function getCpfVendedor():string{
            return $this->cpf;
        }
        public function setCpfVendedor(string $cpf):void{
            $this->cpf=$cpf;
        }

        public function calcularComissao() {
            return 100000 * 0.006;
        }

    }
?>