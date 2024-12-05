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

        $sql = "select * from itens_frigobar where id = " . $id;
        $result = mysqli_query($conn, $sql);
        // linha a linha do banco
        $row = mysqli_fetch_array($result);
        ?>
                
        <h3>Itens do frigobar</h3>

        <form action="./include/atualizarItens.php" method="post">            


            <input type="hidden" readonly="true" name="id" value="<?php echo $row["id"] ?>"/>
                    
            Idprodutos:<Br/>
            <input type="text" name="idprodutos" value="<?php echo $row["idprodutos"] ?>"/><br/>

            Idfrigobar:<Br/>
            <input type="text" name="idfrigobar"  value="<?php echo ($row["idfrigobar"]) ?>"/><br/>
                        
            Quantidade:<Br/>
            <input type="text" name="quantidade"  value="<?php echo ($row["quantidade"]) ?>"/><br/>
            
            <input type="submit" value="Enviar" />

        </form>        

    </body>
</html>

<br/>
<a href="../frigobar/index.php">Página Inicial</a>
