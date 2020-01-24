<?php 

    # Inclui a conexão com o banco de dados
    require_once 'mdlConexao.php';

    if (isset($_POST['btn-acessar'])) {
        
        $email = $_POST['txtEmail'];
        $senha = $_POST['txtSenha'];
    
        $sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if ($num > 0) {
 
            while ($percorrer = mysqli_fetch_array($result)) {
                
                $senha_db = $percorrer['senha'];
                $permissao = $percorrer['permissoes'];
                $nome = $percorrer['nome'];

                if (password_verify($senha, $senha_db)) {

                    session_start();

                    switch ($permissao) {
                        case 'A':
                            $_SESSION["administrador"] = $nome;
                            header('location: ../views/painel_admin.php');
                            break;
                        case 'B':
                            $_SESSION["usuario"] = $nome;
                            header('location: ../views/painel_usuario.php');
                            break;
                        default:
                            header('location: ../views/login.php?nivel-incorreto');
                            break;
                    } 
        
                } else {
                    header('location: ../views/login.php?senha-incorreta');
                }

            }

        } else {
            header('location: ../views/login.php?email-incorreto');
        }

    } else {
        header('location: ../views/login.php');
    }

?>