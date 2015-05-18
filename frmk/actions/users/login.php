<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/users.php');  

    if (!$_POST['username'] || !$_POST['password']) {
        $_SESSION['error_messages'][] = 'Invalid login';
        $_SESSION['form_values'] = $_POST;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isLoginCorrect($username, $password) && !isSuspended($username)) {
        $_SESSION['username'] = $username;
        global $conn;
        $result = $conn->query("SELECT idutilizador FROM utilizador WHERE username='$username'");
        $result = $result->fetch();
        
        $idutilizador = $result['idutilizador'];
        $result = $conn->query("SELECT utilizador.idutilizador, utilizador.username FROM utilizador JOIN administrador ON '$idutilizador'=administrador.idadministrador");
        $result = $result->fetch();
        
        if(!empty($result)){
            $_SESSION['admin_username'] = $result['username'];
        }
        
        $_SESSION['userid'] = $idutilizador;
        $_SESSION['success_messages'][] = 'Login realizado com sucesso';  
    } else {
        $_SESSION['error_messages'][] = 'Login falhou. Verifique o utilizador/password';  
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
