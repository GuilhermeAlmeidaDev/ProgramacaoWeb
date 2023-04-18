<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/style.css"/>
    <title>Programação Web</title>

</head>

<body>
    <div class="container">
        <div class="title_content"><b>Concessionária</b></div>
        <div class="content">
            <?php

                include_once("Models/Carro.php");
                include_once("Models/Vendedor.php");
                include_once("Models/Cliente.php");
                include_once("Models/Funcionario.php");

                $vend1 = new Vendedor("Pedro", "11.111.111-1", "444.444.444-44");
                $vend1->setMatricula(2020);
                $vend1->setnome("Francisca");
                $vend1->setSalarioBruto(3000);

                
                $funcionario = new Funcionario();
                $funcionario->setMatricula(1010);
                $funcionario->setNome("Pedro");
                $funcionario->setSalarioBruto(3000.00);

                $vendedores = [
                    new Vendedor("Pedro", "11.111.111-1", "444.444.444-44"),
                    new Vendedor("Thiago", "22.222.222-2", "555.555.555-55"),
                    new Vendedor("João", "33.333.333-3", "666.666.666-66")
                ];

                $clientes = [
                    new Cliente("Paulo", "12.345.678-9", 40028922),
                    new Cliente("Camila", "98.765.432-1", 15940275),
                    new Cliente("Thais", "12.579.682-8", 75369864),
                    new Cliente("Otavio", "96.854.927-3", 45573589),
                    new Cliente("Lais", "75.648.821-5", 17893485)
                ];

                $carros = [
                    new Carro("VW", "Gol", "Azul", 15560, 50, 12, 28500.0, $vendedores[1], $clientes[0]),
                    new Carro("Chevrolet", "Onix", "Preto", 22350, 45, 10, 25000.0, $vendedores[2], $clientes[1]),
                    new Carro("Fiat", "Palio", "Prata", 0, 47, 14, 33650.0, $vendedores[2], $clientes[2]),
                    new Carro("Ford", "Fiesta", "Prata", 2000, 45, 15, 22000.0, $vendedores[1], $clientes[3]),
                    new Carro("Chevrolet", "Camaro", "Amarelo", 7540, 59, 7, 97500.0, $vendedores[2], $clientes[4])
                ];

                foreach ($carros as $carro){

                    echo "<br><b>DADOS DO VEICULO</b>";
                    echo "<br>Marca: ", $carro->getMarca();
                    echo "<br>Modelo: ", $carro->getModelo();
                    echo "<br>Cor: ", $carro->getCor();
                    echo "<br>Km: ", $carro->getKm();
                    echo "<br>Capacidade do Tanque: ", $carro->getCapacidadeTanque();
                    echo "<br>Quilometragem Por Litro: ", $carro->getKmPorLitro();
                    echo "<br>Rodagem do Veículo: ", $carro->calcularKm();
                    echo "<br>Preço do veículo: ", $carro->getPreco();
                    echo "<br><br><b>DADOS DO VENDEDOR</b>";
                    echo "<br>Nome Vendedor: ", $carro->getVendedor()->getNomeVendedor();
                    echo "<br>RG: ", $carro->getVendedor()->getRgVendedor();
                    echo "<br>CPF: ", $carro->getVendedor()->getCpfVendedor();
                    echo "<br><br><b>DADOS DO CLIENTE</b>";
                    echo "<br>Nome Cliente: ", $carro->getCliente()->getNomeCliente();
                    echo "<br>RG Cliente: ", $carro->getCliente()->getRgCliente();
                    echo "<br>Celular Cliente: ", $carro->getCliente()->getCelularCliente(), "<br><br>";

                }

                echo "<br>==============================";
                echo "<br>Total de Carros: ",Carro::getTotalCarros();
                echo "<br>Preço Total de Carros: ", Carro::getTotalCarros();

                echo "<br><h3><b>Dados do Funcionario</b></h3>";
                echo "<br>Matricula: ", $funcionario->getMatricula();
                echo "<br>Nome: ", $funcionario->getNome();
                echo "<br>Salario Bruto: ", $funcionario->getSalarioBruto();
                echo "<br>Bonificação: ", $funcionario->calcularBonificacao();
                
                echo "<br><b>Matricula:</b> ", $vend1->getMatricula();
                echo "<br>Nome: ", $vend1->getNome();
                echo "<br>Salário: ", $vend1->getSalarioBruto();
                echo "<br>Bonificação: ", $vend1->calcularBonificacao();
                echo "<br>Comissão: ", $vend1->calcularComissao();
                echo "<br>Salário + Bonificação + Comição: ", ($vend1->getSalarioBruto() + $vend1->calcularBonificacao() + $vend1->calcularComissao());
            ?>
        </div>
    </div>
</body>

</html>