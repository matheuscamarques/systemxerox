<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Usuário</title>
    <link rel="stylesheet" href="../lib/css/registrar.css">
    <link rel="stylesheet" href="../lib/css/global.css">
</head>
<body class="registrar">

    <div id="registrar-usuario">
        <h1>Registre-se</h1> 
        <?php if (isset($_GET['sucesso'])) { ?>
            <div class="alert sucesso">
                <span class="btn-close" onclick="this.parentElement.style.display='none';">&times;</span>
                Registro realizado com <strong>sucesso</strong>!
            </div>
        <?php } elseif (isset($_GET['erro'])) { ?>
            <div class="alert erro">
                <span class="btn-close" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Erro</strong> ao tentar registrar, e-mail ou CPF já cadastrado!
            </div>
        <?php } ?>
        <form action="../modules/mdlRegistrarUsuario.php" method="post">
            <label for="">Nome completo</label><br>
            <input type="text" name="txtNome" id="" autocomplete="off" required>
            <label for="">E-mail</label><br>
            <input type="email" name="txtEmail" id="" autocomplete="off" required> 
            <label for="">CPF</label><br>
            <input type="text" name="txtCpf" id="cpf" autocomplete="off" required>
            <label for="">Senha</label><br>
            <input type="password" name="txtSenha" id="" autocomplete="off" required>
            <label for="">Confirmar senha</label><br>
            <input type="password" name="" id="" autocomplete="off" required>
            <input type="submit" name="btn-registrar"  value="Registrar">
        </form>   
        <p> &larr; <a href="login.php">Login</a></p>
    </div>


    <script src="../lib/js/jquery-3.4.0.min.js"></script>
    <script src="../lib/js/jquery.mask.js"></script>
    <script>
        $(document).ready(function() {
            $('#cpf').mask('000.000.000-00');
        })
    </script>
</body>
</html>