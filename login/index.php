<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Bem vindo ao Parnaioca:</h1>
    <form action="./include/validarLogin.php" method="POST">
        <p>
            <label>Login</label>
            <input type="text" name="login">
        </p>     
        <p>
            <label>Senha</label>
            <input type="text" name="senha">
        </p>  
        <p>
            <button>Entrar</button>
        </p>  
    </form>
</body>
</html>