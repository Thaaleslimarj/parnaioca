<?php  
include '../config/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    // Captura os dados do formulário  
    $nome = $_POST['nome'];  
    $data_nascimento = $_POST['data_nascimento'];  
    $cpf = $_POST['cpf'];  
    $email = $_POST['email'];  
    $telefone = $_POST['telefone'];  
    $estado = $_POST['estado'];  
    $cidade = $_POST['cidade'];  

    // Criação da query para inserir os dados  
    $sql = "INSERT INTO clientes (nome, data_nascimento, cpf, email, telefone, estado, cidade)  
            VALUES ('$nome', '$data_nascimento', '$cpf', '$email', '$telefone', '$estado', '$cidade')";  

    if ($conn->query($sql) === TRUE) {  
        echo "Cadastro realizado com sucesso!";  
    } else {  
        echo "Erro: " . $sql . "<br>" . $conn->error;  
    }  

    // Fecha a conexão  
    $conn->close();  
} else {  
    echo "Método de requisição inválido.";  
}  
?>