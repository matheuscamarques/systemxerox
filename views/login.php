<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../lib/css/login.css">
    <link rel="stylesheet" href="../lib/css/global.css">
</head>
<body class="login">
    
    <div id="login">
        <h1>Login</h1>
        <?php if (isset($_GET['email-incorreto'])) { ?>
            <div class="alert erro">
                <span class="btn-close" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>E-mail</strong> incorreto!
            </div>
        <?php } elseif (isset($_GET['senha-incorreta'])) { ?> 
            <div class="alert erro">
                <span class="btn-close" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Senha</strong> incorreta!
            </div>
        <?php } ?>    
        <form action="../modules/mdlLogin.php" method="post">
            <label  for="">E-mail</label ><br>
            <input type="email" name="txtEmail" id="" autocomplete="off" required>
            <label for="">Senha</label><br>
            <input type="password" name="txtSenha" id="" autocomplete="off" required>
            <input type="submit" name="btn-acessar" value="Acessar">
        </form>
        <p> &larr; <a href="registrar.php">Registre-se</a> </p>
    </div>

</body>
</html>