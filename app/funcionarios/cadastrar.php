<!DOCTYPE html>  
<html lang="pt-br">  

<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Cadastro de Funcionário</title>  
</head>  

<body>  

    <h3>Cadastro de Funcionário</h3>  
    <form action="./include/gravarFuncionario.php" method="post" name="cadastro">  

        Nome:<br />  
        <input type="text" name="nome" required /><br />  

        Login:<br />  
        <input type="text" name="login" required /><br />  

        Senha:<br />  
        <input type="password" name="senha" required /><br />  
<!-- 
        Tipo:<br />  
        <input type="text" name="tipo" required /><br />   -->

        Tipo: <br>
        <select name="tipo" id="tipo">
            <option value="usuario">Usuário</option>
            <option value="admin">Administrador</option>
        </select>
        <br>
        
        Status:<br />  
        <input type="text" name="status" required /><br />  

        <input type="submit" value="Enviar" />  

    </form>  

</body>  

</html>

<a href="index.php">Página Inicial</a>