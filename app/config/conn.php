<?php // Conectar ao banco de dados (substitua os valores conforme necessário)  
    $host = "localhost"; // ou seu host  
    $usuario = "root"; // seu usuário do banco  
    $senha = ""; // sua senha do banco  
    $banco = "parnaioca"; // nome do banco  

    // Cria a conexão  
    $conn = new mysqli($host, $usuario, $senha, $banco);  

    // Verifica a conexão  
    if ($conn->connect_error) {  
        die("Conexão falhou: " . $conn->connect_error);  
    }  else {
        // echo 'conexao estabelecida com sucesso!!';
    }
?>