<?php
    class Cliente {

        public function __construct($nome, $rg, $celular){
            $this->nome = $nome;
            $this->rg = $rg;
            $this->celular = $celular;
        }

        private string $nome;
        private string $rg;
        private int $celular;

        public function getNomeCliente():string{
            return $this->nome;
        }

        public function getRgCliente():string{
            return $this->rg;
        }

        public function getCelularCliente():int{
            return $this->celular;
        }

    }
?>