<?php  
  
include_once '../config/conn.php';  

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $id = $_POST['id'];  
    $cliente = $_POST['cliente'];  
    $cpf = $_POST['cpf'];  
    $acomodacao = $_POST['acomodacao'];  
    $entrada = $_POST['entrada'];  
    $saida = $_POST['saida'];  
    $numero = ['numero'];
    $quantidade ['quantidade'];  

    // Marcador de erro nas validações  
    $erro = 0;
    // Mensagem exibida de erro  
    $msg = "";  

    // Validação do cliente  
    if (!$nome) {  
        $erro = 1;  
        $msg .= "O campo cliente é obrigatório.<br>";  
    }  

    // Validação do CPF  
    if (!$cpf) {
        $erro = 1;  
        $msg = "O campo CPF é obrigatório.";  
    } elseif (!preg_match("/^\d{11}$/", $cpf)) {  
        $msg = "O CPF deve conter exatamente 11 dígitos numéricos.";  
    }  

    // Validação da Acomodação  
    if (!$acomodacao) {  
        $erro = 1;
        $msg = "O campo Acomodação é obrigatório.";  
    }  

    // Validação das datas  
    if (!$entrada) {  
        $erro = 1;
        $msg = "O campo Entrada é obrigatório.";  
    }  
    if (!$saida) {  
        $erro = 1;
        $msg = "O campo Saída é obrigatório.";  
    } elseif ($entrada > $saida) {  
        $msg = "A data de entrada deve ser anterior à data de saída.";  
    }  

    // Validação do Número  
    if (($numero) || $numero <= 0) {  
        $msg = 1;
        $erro = "O campo Número deve ser um valor positivo.";  
    }  

    // Validação da Quantidade  
    if (($quantidade) || $quantidade <= 0) {  
        $msg = 1;
        $erro = "O campo Quantidade de hóspede deve ser um valor positivo.";  
    }  

     {  

        // Exemplo de inserção no banco de dados  
        $sql = "INSERT INTO frigobar (id, cliente, cpf, acomodacao, entrada, saida, numero, quantidade)   
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";  
        $stmt = mysqli_prepare($conn, $sql);  
        mysqli_stmt_bind_param($stmt, "issssssis", $id, $cliente, $cpf, $acomodacao, $entrada, $saida, $numero, $quantidade);  

        if (mysqli_stmt_execute($stmt)) {  
            echo "<p style='color:green;'>Check-in realizado com sucesso!</p>";  
        } else {  
            echo "<p style='color:red;'>Erro ao realizar o check-in: " . mysqli_error($conn) . "</p>";  
        }  

        // Fechar a declaração e a conexão  
        mysqli_stmt_close($stmt);  
    }  
}  

// Fechar a conexão  
mysqli_close($conn);  
?>