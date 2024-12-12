<?php   
include '../../config/conn.php';  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    // Captura os dados do formulário  
    $nome = $_POST['nome'];  
    $valor = $_POST['valor'];  
    $entradas = $_POST['entradas'];  
    $saidas = $_POST['saidas'];  
    
        // echo "<pre>";
        // print_r($_POST);
        // die;
        // [

        // ];

    // Marcador de erro nas validações  
    $erro = 0;  
    // Mensagem exibida de erro  
    $msg = "";  
    
    // Validação de produtos (nome)  
    if (!$nome) {  
        $erro = 1;  
        $msg .= "O nome é obrigatório.<br>";  
    }  
    
    // Validação de valor  
    if (!$valor) {  
        $erro = 1;  
        $msg .= "O valor é obrigatório.<br>";  
    }  
    
     // Validação de entradas
     if (!$entradas) {
        $erro = 1;
        $msg .= "O número de entradas é obrigatório.<br>";
    } 

    // Validação de saídas
    if (!$saidas) {
        $erro = 1;
        $msg .= "O número de saídas é obrigatório.<br>";
    }
    
     // Validação de estoque
     if (!$estoque) {
        $erro = 1;
        $msg .= "O estoque é obrigatório.<br>";
    }
    
    //atualizar estoque
    $novaQuantidade = $entradas - $saidas;
    if ($novaQuantidade <0 ){
        echo "Não é possível retirar mais produtos do que os disponíveis.";
    } 
         
    // Verifica se após as validações o marcador continua zero, se continuar executará o código a seguir  
    if ($erro == 0) {  
        
        // Escapar os dados para evitar injeção de SQL  
        $nome = mysqli_real_escape_string($conn, $nome);  
        $valor = mysqli_real_escape_string($conn, $valor);  
        $entradas = mysqli_real_escape_string($conn, $entradas);  
        $saidas = mysqli_real_escape_string($conn, $saidas);  
        $novaQuantidade = mysqli_real_escape_string($conn, $novaQuantidade);  

        // Criação da query para inserir os dados  
        $sql = "INSERT INTO estoque (nome, valor, entradas, saidas, estoque)  
                VALUES ('$nome', '$valor', '$entradas', '$saidas', '$novaQuantidade')";  

    if ($conn->query($sql) === TRUE) {  
            echo "Cadastro realizado com sucesso";  
        } else {  
            echo "Erro ao cadastrar: " . $conn->error;  
        }  
    }  
    
    echo $msg;  
    
    // Fecha a conexão   
    $conn->close();  
    }  
?>