<?php   
include '../../config/conn.php';  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    // Captura os dados do formulário  
    $nome = $_POST['nome'];  
    $valor = $_POST['valor'];  
    $entradas = $_POST['entradas'];  
    $saidas = $_POST['saidas'];  
    $estoque = $_POST['estoque'];
    
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
    if (empty($valor)) {  
        $erro = 1;  
        $msg .= "O valor é obrigatório.<br>";  
    }  
    
     // Validação de entradas
     if (empty($entradas)) {
        $erro = 1;
        $msg .= "O número de entradas é obrigatório.<br>";
    } 

    // Validação de saídas
    if (empty($saidas)) {
        $erro = 1;
        $msg .= "O número de saídas é obrigatório.<br>";
    }
    
     // Validação de estoque
     if (empty($estoque)) {
        $erro = 1;
        $msg .= "O estoque é obrigatório.<br>";
    }
    
    //FALTA FAZER A VALIDAÇÃO DOS CAMPOS AQUI 
         
    // Verifica se após as validações o marcador continua zero, se continuar executará o código a seguir  
    if ($erro == 0) {  
        
        // Escapar os dados para evitar injeção de SQL  
        $nome = mysqli_real_escape_string($conn, $nome);  
        $valor = mysqli_real_escape_string($conn, $valor);  
        $entradas = mysqli_real_escape_string($conn, $entradas);  
        $saidas = mysqli_real_escape_string($conn, $saidas);  
        $estoque = mysqli_real_escape_string($conn, $estoque);  

        // Criação da query para inserir os dados  
        $sql = "INSERT INTO estoque (nome, valor, entradas, saidas, estoque)  
                VALUES ('$nome', '$valor', '$entradas', '$saidas', '$estoque')";  

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