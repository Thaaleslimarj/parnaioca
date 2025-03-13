<?php  
include '../../config/conn.php';

// Dados do estacionamento a serem atualizados  
$nome = $_POST['nome']; 
$acomodacao = $_POST['acomodacao']; 
$placa = $_POST['placa']; 
$status = $_POST['status']; 
$id = $_POST['id'];

// SQL para atualização  
$sql = "update estacionamento set 
            nome = '".$nome."', acomodacao = '".$acomodacao."', placa = '".$placa."' , status = '".$status. "'
            where id = ".$id;  

if (mysqli_query($conn, $sql)) {  
    echo "Registro atualizado com sucesso!";  
} else {  
    echo "Erro ao atualizar registro: " . mysqli_error($conn);  
}  

// Fechar conexão  
mysqli_close($conn);  
?>

<br/>
<a href="/app/estacionamento/">Página inicial</a