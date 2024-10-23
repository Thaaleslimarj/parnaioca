<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Primeiro acesso</title>
</head>

<body>

    <h3>Consultar de Clientes</h3>

    <form action="consultar.php" method="get">

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

        $con = mysqli_connect("localhost", "root", "", "aula2");

        mysqli_select_db($con, "aula2");

        $sql = "select * from clientes where nome like '" . $nome . "%' ";


        $result = mysqli_query($con, $sql);
        $totalregistros = mysqli_num_rows($result); //numero de linhas do resultado

        if ($totalregistros > 0) {
            //tem cadastro
            echo "<table width='700px' border='5px'>
                       <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                       </tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["telefone"] . "</td>";
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