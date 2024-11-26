<?php  
include '../../config/conn.php';

// Dados do frigobar a serem atualizados  
$id = $_POST ['id'];
$idacomodacao = $_POST['idacomodacao']; 
$nome = $_POST['nome']; 
$valor = $_POST['valor']; 
$capacidade = $_POST['capacidade']; 
$manutencao = $_POST['manutencao']; 
$status = $_POST['status']; 

// SQL para atualização  
$sql = "update frigobar set 
            idacomodacao = '$idacomodacao',
            nome = '$nome',
            valor = '$valor',
            capacidade = '$capacidade',
            manutencao = '$manutencao',
            status = '$status'
            where id = $id";

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