<?php 
include '../config/conn.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <title>Consultar funcionário</title>

    <script>

            function excluir(mat) {

                if (confirm('Deseja realmente excluir ?')) {
                    location.href = 'include/excluirFuncionario.php?id=' +  mat ;
                }

            }
        </script>
</head>

<body>

    <h3>Consultar Funcionário:</h3>

    <form action="index.php" method="get" class="text-center">
        <label for="text">Nome:</label>
        <input type="text" name="nome" class="form-control d-inline w-50" />
        <button type="button" class="btn btn-secondary">Enviar</button>
    </form>

    <hr />

    <?php

        if (isset($_GET["nome"])) {
         $nome = $_GET["nome"];

        $sql = "SELECT * FROM funcionario WHERE nome like '" . mysqli_real_escape_string($conn, $nome) . "%' ";
        $result = mysqli_query($conn, $sql);
        $totalregistros = mysqli_num_rows($result); 

        if ($totalregistros > 0) {
            echo "<table width='900px' border='1px'>
                       <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>Tipo</th>
                            <th>Status</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                            </tr>";

                            while ($row = mysqli_fetch_array($result)) {
                ?>

                <tr>
                <td><?php echo $row["id"] ?> </td>
                <td><?php echo $row["nome"] ?></td>
                <td><?php echo $row["login"] ?></td>
                <td><?php echo $row["tipo"] ?></td>
                <td><?php echo $row["status"] ?></td>
                <td><a href="editar.php?id=<?= $row["id"] ?>" class="btn btn-warning">Editar</a></td>
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
    <a href="cadastrar.php"> Cadastrar funcionário </a>
    <br>
    <a href="../index.php">Página Inicial</a>
</body>

</html>
