<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'funcoes.php';
        session_start();
        if (isset($_SESSION["erro_login"])) {
            echo $_SESSION["erro_login"];
            unset($_SESSION["erro_login"]);
        }
    ?>

    <form method="POST" action="logar.php">
        Email: <input name="email" required> <br>
        Senha: <input name="senha" type="password" required> <br>
        <button name="botao" type="submit" value="logar">Logar</button>
        <a href="cadastro.php">Ainda nao é cadastrado? <strong>Clique aqui!</strong></a>
    </form>
    
</body>
</html>