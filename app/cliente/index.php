<?php 
include '../config/conn.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <title>consultar cliente</title>

    <script>

            function excluir(id) {

                if (confirm('Deseja realmente excluir ?')) {
                    location.href = 'include/excluirCliente.php?id=' +  id ;
                }

            }

        </script>
</head>

<body>

    <h3>Consultar Cliente</h3>

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

        $sql = "select * from clientes where nome like '" . $nome . "%' ";

        $result = mysqli_query($conn, $sql);
        $totalregistros = mysqli_num_rows($result); //numero de linhas do resultado

        if ($totalregistros > 0) {
            //tem cadastro
            //echo <table><th> - front end, pode modificar a escrita a vontade 
            echo "<table width='900px' border='1px'>
                       <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>data_nascimento</th>
                            <th>cpf</th>
                            <th>email</th>
                            <th>telefone</th>
                            <th>estado</th>
                            <th>cidade</th>
                            <th>status</th>
                       </tr>";
            // enquanto houverem resultados o codigo continuara buscando informações;;    
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <!-- //echo <tr><td> - informações do banco. escrita exatamente igual ao do Banco de dados -->
                <tr>
                <td><?php echo $row["id"] ?> </td>
                <td><?php echo $row["nome"] ?></td>
                <td><?php echo $row["data_nascimento"] ?></td>
                <td><?php echo $row["cpf"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["telefone"] ?></td>
                <td><?php echo $row["estado"] ?></td>
                <td><?php echo $row["cidade"] ?></td>
                <td><?php echo $row["status"] ?></td>
                <td><a href="editar.php?id=<?php echo $row["id"] ?>">...</a></td>
                <td><a href="#"onclick="excluir(<?php echo $row["id"] ?>)">X</a></td>
                </tr>
                <?php
            }

            echo "</table>";
            echo "Total de registros: $totalregistros";
        } else {
            echo "Nenhum cliente cadastrado";
        }
    }
    ?>
    <br>
    <a href="cadastrarCliente.php"> Cadastrar cliente </a>
    <br>
    <a href="../index.php">Página Inicial</a>
</body>

</html>
