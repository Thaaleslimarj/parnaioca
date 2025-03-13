<?php   
session_start();  
?>  

<!DOCTYPE html>  
<html lang="pt-BR">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Parnaioca LTDA</title>  
    <style>  
        body {  
            font-family: 'Arial', sans-serif;  
            background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0'); /* Imagem de fundo de praia */  
            background-size: cover;  
            color: #333;  
            margin: 0;  
            padding: 20px;  
            display: flex;  
            justify-content: center; /* Centraliza horizontalmente */  
            align-items: center; /* Centraliza verticalmente */  
            height: 100vh; /* Ocupa toda a altura da janela */  
        }  
        h1 {  
            color: #2E8BC0; /* Azul suave */  
            margin-bottom: 20px;  
        }  
        .container {  
            max-width: 400px; /* Limita a largura do contêiner */  
            background: rgba(255, 255, 255, 0.9); /* Fundo branco claro */  
            padding: 20px;  
            border-radius: 8px;  
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);  
            text-align: center; /* Centraliza o texto dentro do contêiner */  
        }  
        .button {  
            display: block; /* Mudando para block para ocupar a largura total */  
            padding: 10px;  
            margin: 10px 0;  
            border: none;  
            border-radius: 5px;  
            color: #fff;  
            background-color: #4CAF50; /* Verde suave */  
            font-size: 16px;  
            text-decoration: none;  
            transition: background-color 0.3s;  
        }  
        .button:hover {  
            background-color: #45a049; /* Verde mais escuro para hover */  
        }  
        footer {  
            margin-top: 20px;  
            color: #2E8BC0; /* Azul suave */  
        }  
    </style>  
</head>  
<body>  

<div class="container">  
    <h1>Bem-vindo(a) à Parnaioca LTDA!</h1>  

    <a href="./funcionarios/index.php" class="button">Consultar Funcionários</a>  
    <a href="./cliente/index.php" class="button">Consultar Clientes</a>  
    <a href="./acomodacoes/index.php" class="button">Acomodações</a>  
    <a href="./frigobar/index.php" class="button">Frigobar</a>  
    <a href="./estacionamento/index.php" class="button">Estacionamento</a>  
    <a href="./reserva/index.php" class="button">Reservas</a>  

    <!-- Botão de Sair -->  
    <a href="../app/arquivo_de_login/logout.php" class="button">Encerrar Sessão</a>  
</div>  

<footer>  
    <h4>&copy; Parnaioca LTDA</h4>  
</footer>  

</body>  
</html>  