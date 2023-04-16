<?php
        // Criando a classe "Funcionario"
    class Funcionario{

            // Instanciando as variaveis da classe
        private int $matricula;
        private string $nome;
        private $salarioBruto;

            // Getters e Setters
        public function getMatricula() : int {
            return $this->matricula;
        }

        public function setMatricula(int $matricula) : void {
            $this->matricula = $matricula;
        }

        public function getNome() : string {
            return $this->nome;
        }

        public function setnome(string $nome) : void {
            $this->nome = $nome;
        }

        public function getSalarioBruto() : float {
            return $this->salarioBruto;
        }
        public function setSalarioBruto(float $salarioBruto) : void {
            $this->salarioBruto = $salarioBruto;
        }

            // Calculo de Bonificação
        public function calcularBonificacao() : float {
            return $this->salarioBruto * 0.05;
        }
    }
?>