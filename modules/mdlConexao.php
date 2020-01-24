<?php 

    # Variaveis de conexao 
    $servidor = "localhost";
    $usuario = "ubuntu-server";
    $senha = "ubserver4321";
    $db = "db_projeto";

    # Estrutura da conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $db);
    mysqli_set_charset($conn, "UTF8");
?>