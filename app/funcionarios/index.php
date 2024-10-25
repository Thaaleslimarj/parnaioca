<?php 
include '../config/conn.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>consultar funcionario</title>
</head>

<body>

    <h3>Consultar funcionario</h3>

    <form action="index.php" method="get">

        Nome:
        <input type="text" name="nome" />
        <input type="submit" value="Enviar" />

    </form>

    <hr />

    <?php

    //se nao estiver vazio
    //if(!empty($_GET["nome"])){

    //isset() se existe
    if (isset($_GET["nome"])) {

        $nome = $_GET["nome"];

        $sql = "select * from funcionario where nome like '" . $nome . "%' ";

        $result = mysqli_query($conn, $sql);
        $totalregistros = mysqli_num_rows($result); //numero de linhas do resultado

        if ($totalregistros > 0) {
            //tem cadastro
            //echo <table><th> - front end, pode modificar a escrita a vontade 
            echo "<table width='700px' border='5px'>
                       <tr>
                            <th>id</th>
                            <th>nome</th>
                            <th>login</th>
                            <th>tipo</th>
                            <th>status</th>
                       </tr>";
            // enquanto houverem resultados o codigo continuara buscando informações;;    
            while ($row = mysqli_fetch_array($result)) {
                //echo <tr><td> - informações do banco. escrita exatamente igual ao do Banco de dados
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["login"] . "</td>";
                echo "<td>" . $row["tipo"] . "</td>";
                echo "<td>" . $row["status"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "Total de registros: $totalregistros";
        } else {
            echo "Nenhum cliente cadastrado";
        }
    }
    ?>

    <a href="cadastrar.php"> Cadastrar funcionario </a>
</body>

</html>