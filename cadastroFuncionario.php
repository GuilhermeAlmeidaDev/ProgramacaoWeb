<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <title>Programação Web</title>

</head>

<body>
    <div class="container sombra">
        <div class="title_content"><b>CADASTRO DE FUNCIONARIO</b></div>
        <div class="content">
            <form name="formFuncionario" action="MostrarFuncionarios.php" method="post">
                <label>Matricula: </label>
                <input name="matricula" type="text">

                <br><br>

                <label>Nome: </label>
                <input name="nome" type="text">

                <br><br>

                <label>Salario Bruto: </label>
                <input name="salarioBruto" type="text">

                <br><br><br>

                <div class="buttonHolder">
                    <input type="submit" value="Cadastrar" id="cadastrarFuncionario">
                </div>
            </form>
        </div>
    </div>
</body>

</html>