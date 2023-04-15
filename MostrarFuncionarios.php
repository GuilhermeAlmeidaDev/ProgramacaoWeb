<html>
    <body>
        <?php
            include_once 'Classes/Funcionario.php';

            $funcionario = new Funcionario();
            $funcionario->setMatricula(intval($_POST["matricula"]));
            $funcionario->setNome($_POST["nome"]);
            $funcionario->setSalarioBruto(intval($_POST["salarioBruto"]));

            echo "<br><h3><b>Dados do Funcionario</b></h3>";
            echo "<br>Matricula: ", $funcionario->getMatricula();
            echo "<br>Nome: ", $funcionario->getNome();
            echo "<br>Salario Bruto: ", $funcionario->getSalarioBruto();
            echo "<br>Bonificação: ", $funcionario->calcularBonificacao();
    
        ?>        
    </body>
</html>