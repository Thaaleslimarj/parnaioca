<?php   
include '../config/conn.php';  
?>  

<!DOCTYPE html>  
<html lang="pt-br">  

<head>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <title>Itens do frigobar</title>  

    <script>  
        function excluir(id) {  
            if (confirm('Deseja realmente excluir este nome?')) {  
                location.href = 'include/itens_frigobar.php?id=' + id;  
            }  
        }  
    </script>  
</head>  

<body>  

    <h3>Consultar itens do Frigobar</h3>  

    <form action="./index.php" method="get">  
       
        <b><p>Itens Frigobar:  
        <input type="text" name="nome" />  
        <input type="submit" value="Enviar" />  
        </b></p>
    </form>


    <hr />  

    <?php  
    // Verifica se existe um nome para consulta  
    if (isset($_GET["nome"])) {  
       
        $nome = $_GET["nome"];  
        
        // Consulta ao banco de dados para buscar os itens do frigobar  
       
        $sql = "select * from itens_frigobar where id like '" . $nome . "%' "; 
       
        $result = mysqli_query($conn, $sql);  
        $totalregistros = mysqli_num_rows($result); // Número de linhas do resultado  

        if ($totalregistros > 0) {  
            // Exibe a tabela com os itens encontrados  
            echo "<table width='900px' border='1px'>  
                       <tr>  
                            <th>ID</th>  
                            <th>idprodutos</th>  
                            <th>idfrigobar</th>  
                            <th>quantidade</th>  
                            <th>editar</th>  
                            <th>excluir</th>  
                       </tr>";  

            // Enquanto houverem resultados, o código continuará buscando informações  
            while ($row = mysqli_fetch_array($result)) {  
                ?>  
                <tr>  
                <td><?php echo $row["id"] ?> </td>  
                <td><?php echo $row["idprodutos"] ?></td>  
                <td><?php echo $row["idfrigobar"] ?></td>  
                <td><?php echo $row["quantidade"] ?></td>  
                <td><a href="editar.php?id=<?php echo $row["id"] ?>">...</a></td>  
                <td><a href="#" onclick="excluir(<?php echo $row["id"] ?>)">X</a></td>  
                </tr>  
                <?php  
            }  

            echo "</table>";  
            echo "Total de registros: $totalregistros";  
        } else {  
            echo "Nenhum item encontrado no frigobar.";  
        }  
    }  
    ?>  

    <b><p></p>
    <a href="cadastrarItens.php"> Cadastrar itens: </a>
    <br><br>
    <a href="../frigobar/">Página inicial:</a>
</body>  

</html>