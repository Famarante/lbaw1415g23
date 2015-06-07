<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/comments.php');  


    
    $comment = $_POST['comment'];
    $productID = $_POST['idProduct'];
    $userID = $_SESSION['userid'];

    try{
        createComment($userID, $productID, $comment);

    }catch(PDOException $e){
        var_dump($e);
        /*$_SESSION['form_values'] = $_POST;
        if(strpos($e->getMessage(), 'username')){
            $_SESSION['error_messages'][] = "Username já existente... Tente outro nome de utilizador";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
        if(strpos($e->getMessage(), 'email')){
            $_SESSION['error_messages'][] = "Já existe um utilizador registado com esse email";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
        if(strpos($e->getMessage(), 'nif')){
            $_SESSION['error_messages'][] = "Já existe um utilizador registado com esse NIF";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }*/
    }
    /*$password = $_POST['password'];

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
    }*/
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
