<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    // Conectar ao banco de dados (substitua os valores conforme necessário)  
    $host = "localhost"; // ou seu host  
    $usuario = "usuario"; // seu usuário do banco  
    $senha = "senha"; // sua senha do banco  
    $banco = "nome_do_banco"; // nome do banco  

    // Cria a conexão  
    $conn = new mysqli($host, $usuario, $senha, $banco);  

    // Verifica a conexão  
    if ($conn->connect_error) {  
        die("Conexão falhou: " . $conn->connect_error);  
    }  

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