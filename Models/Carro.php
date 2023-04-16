<?php

   class Carro {
    
      public function __construct(
            string $marca,
            string $modelo,
            string $cor,
            int $km,
            int $capacidadeTanque,
            int $kmPorLitro,
            float $preco,
            Vendedor $vendedor,
            Cliente $cliente
      )
      {
         $this->marca = $marca;
         $this->modelo = $modelo;
         $this->cor = $cor;
         $this->km = $km;
         $this->capacidadeTanque = $capacidadeTanque;
         $this->kmPorLitro = $kmPorLitro;
         $this->preco = $preco;
         Carro::$totalCarros++;
         Carro::$precoTotal += $this->preco;
         $this->vendedor = $vendedor;
         $this->cliente = $cliente;
      }

      private string $marca;
      private string $modelo;
      private string $cor;
      private int $km;
      private int $capacidadeTanque;
      private int $kmPorLitro;
      private float $preco;
      private static $totalCarros;
      private static $precoTotal;
      private Vendedor $vendedor;
      private Cliente $cliente;

         // Métodos Getters e Setters
      public function setMarca(string $marca):void{
         $this->marca=$marca;
      }
      public function getMarca():string{
         return $this->marca;
      }
    
      public function setModelo(string $modelo):void{
         $this->modelo=$modelo;
      }
      public function getModelo():string{
         return $this->modelo;
      }
      
      public function setCor(string $cor):void{
         $this->cor=$cor;
      }
      public function getCor():string{
         return $this->cor;
      }

      public function setKm(int $km):void{
         $this->km=$km;
      }
      public function getKm():int{
         return $this->km;
      }

      public function setCapacidadeTanque(int $capacidadeTanque):void{
         $this->capacidadeTanque=$capacidadeTanque;
      }
      public function getCapacidadeTanque():int{
         return $this->capacidadeTanque;
      }

      public function setKmPorLitro(int $kmPorLitro):void{
         $this->kmPorLitro=$kmPorLitro;
      } 
      public function getKmPorLitro():int{
         return $this->kmPorLitro;
      }

      public function setPreco(float $preco):void{
         $this->preco=$preco;
      }
      public function getPreco():float{
         return $this->preco;
      }
        
      public static function getTotalCarros():int{
         return Carro::$totalCarros;
      }
   
      public static function getPrecoTotal():int{
         return Carro::$precoTotal;
      }

      public function getVendedor():Vendedor{
         return $this->vendedor;
      }

      public function getCliente():Cliente{
         return $this->cliente;
      }

            // Método de Regra de Negócio
      public function calcularKm() {
         return $this->capacidadeTanque * $this->kmPorLitro;
      } 
   
      public function calcularDesconto ($percentualDescontoVendedor) {
         if ($percentualDescontoVendedor >= 0 && $percentualDescontoVendedor <= 4) {
            return $this->preco * ($percentualDescontoVendedor / 100);
         } elseif ($percentualDescontoVendedor < 0){
            return 0.0;
         } else{
            return $this->preco * 0.04;
         }
      }
   }
?>