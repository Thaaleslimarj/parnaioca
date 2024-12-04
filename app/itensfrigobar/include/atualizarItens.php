<?php  
include '../../config/conn.php';

    // Dados do frigobar a serem atualizados  
    $id = $_POST ['id'];
    $idprodutos = $_POST['idprodutos']; 
    $idfrigobar = $_POST['idfrigobar']; 
    $quantidade = $_POST['quantidade']; 

    //fazer validação de quantidade de itens se for maior que a quantidade do estoque

    // SQL para atualização  
    $sql = "update itens_frigobar set 
                idprodutos = '$idprodutos',
                idfrigobar = '$idfrigobar',
                quantidade = '$quantidade'
                where id = '$id'";
                

    if (mysqli_query($conn, $sql)) {  
        echo "Registro atualizado com sucesso!";  
    } else {  
        echo "Erro ao atualizar registro: " . mysqli_error($conn);  
    }  

    // Fechar conexão  
    mysqli_close($conn);  
?>

<br/>
<a href="../index.php">Página inicial</a>