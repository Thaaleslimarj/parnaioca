<?php   
include '../config/conn.php';  
?>  

<!DOCTYPE html>  
<html lang="pt-br">  

<head>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <title>Consultar Estoque</title>  

    <script>  
        function excluir(id) {  
            if (confirm('Deseja realmente excluir este nome?')) {  
                location.href = 'include/excluirEstoque.php?id=' + id;  
            }  
        }  
    </script>  
</head>  

<body>  

    <h3>Consultar estoque</h3>  

    <form action="index.php" method="get">  
       
        <b><p>Estoque:  
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
       
        $sql = "select * from estoque where nome like '" . $nome . "%' "; 
       
        $result = mysqli_query($conn, $sql);  
        $totalregistros = mysqli_num_rows($result); // Número de linhas do resultado  

        if ($totalregistros > 0) {  
            // Exibe a tabela com os itens encontrados  
            echo "<table width='900px' border='1px'>  
                       <tr>  
                            <th>ID</th>  
                            <th>Nome</th>  
                            <th>valor</th>  
                            <th>entradas</th>  
                            <th>saidas</th>    
                            <th>estoque</th>    
                       </tr>";  

            // Enquanto houverem resultados, o código continuará buscando informações  
            while ($row = mysqli_fetch_array($result)) {  
                ?>  
                <tr>  
                <td><?php echo $row["id"] ?> </td>  
                <td><?php echo $row["nome"] ?></td>  
                <td><?php echo $row["valor"] ?></td>  
                <td><?php echo $row["entradas"] ?></td>  
                <td><?php echo $row["saidas"] ?></td>    
                <td><?php echo $row["estoque"] ?></td>    
                </tr>  
                <?php  
            }  

            echo "</table>";  
            echo "Total de registros: $totalregistros";  
        } else {  
            echo "Nenhum nome encontrado no estoque.";  
        }  
    }  
    ?>  
      
      
    <a href="cadastrarEstoque.php"> Cadastrar estoque </a>
    <br>
    <a href="../">Página inicial</a>  
</body>  

</html>