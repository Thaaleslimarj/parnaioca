<?php   
include '../../config/conn.php';  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    // Captura os dados do formulário  
    $idprodutos = $_POST['idprodutos'];  
    $idfrigobar = $_POST['idfrigobar'];  
    $quantidade = $_POST['quantidade'];  
    
    // Marcador de erro nas validações  
    $erro = 0;  
    // Mensagem exibida de erro  
    $msg = "";  
    
    // Validação de produtos  
    if (empty($idprodutos)) {  
        $erro = 1;  
        $msg .= "Produto é obrigatório.<br>";  
    }  
    
    // Validação de frigobar  
    if (empty($idfrigobar)) {  
        $erro = 1;  
        $msg .= "Frigobar é obrigatório.<br>";  
    }  
    
    // Validação da quantidade  
    if (empty($quantidade) || $quantidade <= 0) {  
        $erro = 1;  
        $msg .= "Quantidade inválida, informe um número maior que 0.<br>";  
    }  
    
    // Verificação se o frigobar já existe na tabela  
    $frigobar = mysqli_query($conn, "SELECT * FROM frigobar WHERE id = $idfrigobar");   
    if (mysqli_num_rows($frigobar) == 0) {  
        $erro = 1;  
        $msg .= "Frigobar não cadastrado.<br>";    
    }  
    
    $produtos = mysqli_query($conn, "SELECT * FROM estoque WHERE id = $idprodutos");   
    if (mysqli_num_rows($produtos) == 0) {  
        $erro = 1;  
        $msg .= "produto não cadastrado.<br>";    
        }  
        
        $row = mysqli_fetch_assoc($frigobar);
        $capacidade = $row ['capacidade'];
        $itens = mysqli_query($conn, "SELECT * FROM itens_frigobar WHERE id = $idfrigobar");
        $quantidades = [];
        while ($row1 = mysqli_fetch_assoc($itens)) { 
            if (isset($row1['quantidade']) && is_numeric($row1['quantidade'])) {    
        $quantidades[] = (int)$row1['quantidade'];
            }
        }    
        $qtditens = array_sum($quantidades);
        
        


    if (($quantidade + $qtditens) > $capacidade){
            $erro = 1;
            $msg = "quantidade de itens informada maior do que a capacidade do frigobar";
        }

        
        // Verifica se após as validações o marcador continua zero, se continuar executará o código a seguir  
    if ($erro == 0) {  
        
        // Escapar os dados para evitar injeção de SQL  
        $idprodutos = mysqli_real_escape_string($conn, $idprodutos);  
        $idfrigobar = mysqli_real_escape_string($conn, $idfrigobar);  
        $quantidade = mysqli_real_escape_string($conn, $quantidade);  

        // Criação da query para inserir os dados  
        $sql = "INSERT INTO itens_frigobar (idprodutos, idfrigobar, quantidade)  
                VALUES ('$idprodutos', '$idfrigobar', '$quantidade')";  

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