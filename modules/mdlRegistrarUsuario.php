<?php 

    # Inclui a conexão com o banco de dados
    require_once 'mdlConexao.php';

    if (isset($_POST['btn-registrar'])) {
 
        $nome = mysqli_escape_string($conn, $_POST['txtNome']);
        $email = mysqli_escape_string($conn, $_POST['txtEmail']);
        $cpf = mysqli_escape_string($conn, $_POST['txtCpf']);
        $senha = password_hash($_POST['txtSenha'], PASSWORD_DEFAULT);
        $permissao = mysqli_escape_string($conn, "B");
        
        $sql = "INSERT INTO tb_usuarios (nome, email, cpf, senha, permissoes) VALUES ('$nome', '$email', '$cpf', '$senha', '$permissao')";

        if (mysqli_query($conn, $sql)) {
            header('location: ../views/registrar.php?sucesso');
        } else {
            header('location: ../views/registrar.php?erro');
        }
        
    } else {
        header('location: ../views/registrar.php');
    }


?>