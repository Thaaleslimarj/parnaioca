<?php  
include '../../config/conn.php';

// Dados do funcionário a serem atualizados  
$nome = $_POST['nome']; 
$valor = $_POST['valor']; 
$valor = $_POST['valor']; 
$tipo = $_POST['tipo']; 
$status = $_POST['status']; 
$id = $_POST['id'];
$capacidade = $_POST['capacidade'];

// SQL para atualização  
$sql = "update acomodacoes set 
            nome = '".$nome."', valor = '".$valor."', capacidade = '".$capacidade."' , tipo = '".$tipo."' , status = '".$status."'
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
<a href="/app/index.php">Página inicial</a