<?php 

    session_start();
    if (!isset($_SESSION["usuario"])) {
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuário</title>
    <link rel="stylesheet" href="../lib/css/painel_usuario.css">
</head>
<body>

    <!-- Menu Principal  -->
    <header>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="btn-menu">&#9776;</label>
            <label for="" id="sair"><a href="../modules/mdlSair.php">Sair</a></label>
            <label for="" id="user-logado">|</label>
            <label for="" id="user-logado"><?php echo $_SESSION["usuario"];?></label>
            <ul>
                <li><label for="Pedidos"><a href="?pedidos">Pedidos</a></label></li>
                <!--<li><label for="Chat"><a href="?chat">Chat</a></label></li> --> 
                <li><label for="Dados"><a href="?dados">Configurações</a></label></li>
            </ul>
        </nav>
    </header>

    <section>
       
        <?php

            if (isset($_GET['pedidos'])) {
                include 'usuarios/pedidos.php';
            } elseif (isset($_GET['chat'])) {
                include 'usuarios/chat.php';
            } elseif (isset($_GET['dados'])) {
                include 'usuarios/meus_dados.php';
            } elseif (isset($_GET['novo'])) {
                include 'usuarios/cadastra_edita_pedidos.php';
            } elseif (isset($_GET['editar'])) {
                include 'usuarios/cadastra_edita_pedidos.php';
            } else {
                header('location: ../views/painel_usuario.php?pedidos');
            }

        ?>

    </section>


    <script src="../lib/js/jquery-3.4.0.min.js"></script>
    <script src="../lib/js/jquery.mask.js"></script>
    <script>
        $(document).ready(function() {
            $('#cpf').mask('000.000.000-00');
        })
    </script>
</body>
</html>