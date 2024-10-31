<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Bem vindo ao Parnaioca:</h3>

    <!-- AQUI INCLUI O INDEX NO VALIDAR LOGIN NO METODO POST (CRIA INFORMAÇÃO)  -->
    <form action="/login/validarLogin.php" method="POST">
        <p>
            <label for="login">Login</label>
            <input type="text" name="login" id="login">
        </p>     
        <p>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </p>  
        <p>
            <button>Entrar</button>
        </p>  
        <?php

            if (isset($_GET['msgInvalida'])) {
                $mensagemInvalida = $_GET['msgInvalida']; 

                ?>
                    <p style="color:red"><?php echo $mensagemInvalida ?></p>
                <?php

            }

        ?>
    </form>
</body>
</html>