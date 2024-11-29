<?php  
include '../../config/conn.php';

// Dados do estoque a serem atualizados  
$id = $_POST ['id'];
$nome = $_POST['nome']; 
$valor = $_POST['valor']; 
$entradas = $_POST['entradas']; 
$saidas = $_POST['saidas']; 
$estoque = $_POST['estoque']; 

// SQL para atualização  
$sql = "update estoque set 
            nome = '$nome',
            valor = '$valor',
            entradas = '$entradas',
            saidas = '$saidas',
            estoque = '$estoque',
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