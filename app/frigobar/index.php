<?php   
include '../config/conn.php';  
?>  

<!DOCTYPE html>  
<html lang="pt-br">  

<head>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <title>Consultar Frigobar</title>  

    <script>  
        function excluir(id) {  
            if (confirm('Deseja realmente excluir este nome?')) {  
                location.href = 'include/excluirFrigobar.php?id=' + id;  
            }  
        }  
    </script>  
</head>  

<body>  

    <h3>Consultar Frigobar</h3>  

    <form action="index.php" method="get">  
       
        <b><p>Frigobar:  
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
       
        $sql = "select * from frigobar where nome like '" . $nome . "%' "; 
       
        $result = mysqli_query($conn, $sql);  
        $totalregistros = mysqli_num_rows($result); // Número de linhas do resultado  

        if ($totalregistros > 0) {  
            // Exibe a tabela com os itens encontrados  
            echo "<table width='900px' border='1px'>  
                       <tr>  
                            <th>ID</th>  
                            <th>Nome</th>  
                            <th>valor</th>  
                            <th>capacidade</th>  
                            <th>manuntenção</th>    
                            <th>status</th>    
                       </tr>";  

            // Enquanto houverem resultados, o código continuará buscando informações  
            while ($row = mysqli_fetch_array($result)) {  
                ?>  
                <tr>  
                <td><?php echo $row["id"] ?> </td>  
                <td><?php echo $row["nome"] ?></td>  
                <td><?php echo $row["valor"] ?></td>  
                <td><?php echo $row["capacidade"] ?></td>  
                <td><?php echo $row["manuntencao"] ?></td>    
                <td><?php echo $row["status"] ?></td>    
                <td><a href="editar.php?id=<?php echo $row["id"] ?>">Editar</a></td>  
                <td><a href="#" onclick="excluir(<?php echo $row["id"] ?>)">Excluir</a></td>  
                </tr>  
                <?php  
            }  

            echo "</table>";  
            echo "Total de registros: $totalregistros";  
        } else {  
            echo "Nenhum nome encontrado no frigobar.";  
        }  
    }  
    ?>  
    <br>  
    <a href="cadastrarFrigobar.php">Cadastrar frigobar por acomodação:</a>  
    <br>  
    <a href="cadastrarItens.php">Cadastrar itens no frigobar:</a>  
    <br>  
    <a href="estoque.php">Estoque:</a>  
    <br>  
    
    <p></p>

    <a href="../index.php">Página Inicial</a>  
</body>  

</html>