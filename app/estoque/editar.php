<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       
       <?php
        include_once '../config/conn.php';
        $id = $_GET["id"];

        $sql = "select * from estoque where id = " . $id;
        $result = mysqli_query($conn, $sql);
        // linha a linha do banco
        $row = mysqli_fetch_array($result);
        ?>
                
        <h3>Itens do estoque</h3>

        <form action="./include/atualizarEstoque.php" method="post">            


            <input type="hidden" readonly="true" name="id" value="<?php echo $row["id"] ?>"/>
                    
            Nome:<Br/>
            <input type="text" name="nome" value="<?php echo $row["nome"] ?>"/><br/>

            Valor:<Br/>
            <input type="text" name="valor"  value="<?php echo ($row["valor"]) ?>"/><br/>
                        
            Entradas:<Br/>
            <input type="text" name="entradas"  value="<?php echo ($row["entradas"]) ?>"/><br/>
            
            Saidas:<Br/>
            <input type="text" name="saidas"  value="<?php echo ($row["saidas"]) ?>"/><br/>
            
            estoque:<Br/>
            <input type="text" name="estoque"  value="<?php echo ($row["estoque"]) ?>"/><br/>
            
            <input type="submit" value="Enviar" />

        </form>        

    </body>
</html>

<br/>
<a href="../frigobar/index.php">Página Inicial</a>
