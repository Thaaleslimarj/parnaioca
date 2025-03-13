<?php  
     session_start();  
?>  

<!DOCTYPE html>  
<html lang="pt-br">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Login - Hotel Praia</title>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');  
            background-size: cover;  
            color: #333;  
            text-align: center;  
            margin: 0;  
            padding: 0;  
            height: 100vh;  
            display: flex;  
            justify-content: center;  
            align-items: center;  
        }  

        .login {  
            background-color: rgba(255, 255, 255, 0.9);  
            border-radius: 10px;  
            padding: 30px; 
            width: 300px;  
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);  
            text-align: center;   
        }  

        h4 {  
            margin-bottom: 20px;  
            font-size: 24px;  
            color: #007BFF;  
        }  

        .erro {  
            background-color: rgba(255, 0, 0, 0.9);  
            color: white;   
            padding: 10px;  
            border-radius: 5px;  
            margin-bottom: 20px;  
            font-weight: bold; 
        }  

        input[type="text"],  
        input[type="password"] {  
            width: 100%;  
            padding: 10px;  
            margin-bottom: 10px;  
            border: 1px solid #ddd;  
            border-radius: 5px;  
            font-size: 16px; 
        }  

        input[type="submit"] {  
            background-color: #007BFF; 
            color: white;  
            border: none;  
            padding: 10px;  
            border-radius: 5px;  
            cursor: pointer;  
            font-size: 16px;  
            transition: background-color 0.3s;  
        }  

        input[type="submit"]:hover {  
            background-color: #0056b3; 
        }  
    </style>  
</head>  
<body>  

    <div class="login">  
        <h3>Seja bem-vindo ao Parnaioca 🏝️</h3>  
        <hr>  

        <?php   
        if (isset($_SESSION['nao_autenticado'])):   
        ?>  
      
            <div class="erro">  
                <h3>ERRO: Senha inválida</h3>  
            </div>  
   
        <?php   
            endif;  
            unset($_SESSION['nao_autenticado']);  
        ?>  

        <form action="/parnaioca/login/validarLogin.php" method="POST">  
            <input type="text" name="login" id="login" placeholder="Usuário" required>   
            <input type="password" name="senha" id="senha" placeholder="Senha" required>   
            <input class="botao" type="submit" value="ENTRAR">  
        </form>  
    </div>  

</body>  
</html>  