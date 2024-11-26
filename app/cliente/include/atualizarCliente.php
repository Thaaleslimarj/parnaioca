<?php  
include '../../config/conn.php';

// Dados do funcionário a serem atualizados  
$id = $_POST ['id'];
$nome = $_POST['nome']; 
$data_nascimento = $_POST['data_nascimento']; 
$cpf = $_POST['cpf']; 
$email = $_POST['email']; 
$telefone = $_POST['telefone']; 
$estado = $_POST['estado']; 
$cidade = $_POST['cidade']; 
$status = $_POST['status']; 

// SQL para atualização  
$sql = "update clientes set 
            nome = '$nome',
            data_nascimento = '$data_nascimento',
            cpf = '$cpf',
            email = '$email',
            telefone = '$telefone',
            estado = '$estado',
            cidade = '$cidade',
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