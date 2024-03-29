<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/users.php');  

    if (!$_POST['fullname'] || !$_POST['username'] || !$_POST['email'] || !$_POST['password'] || !$_POST['rpassword']) {
        $_SESSION['error_messages'][] = 'Campos marcados com * sao obrigatorios';
        $_SESSION['form_values'] = $_POST;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    else if($_POST['password'] !== $_POST['rpassword']){
        $_SESSION['error_messages'][] = "As passwords nao coincidem";
        $_SESSION['form_values'] = $_POST;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    else if($_POST['password'] == $_POST['rpassword']){
        if(strlen($_POST['password']) < 8 || strlen($_POST['password']) > 20){
            $_SESSION['error_messages'][] = "A password deve ter entre 8 e 20 caracteres.";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
    }

    $name = $_POST['fullname'];  
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nif = $_POST['nif']; 
    $phone = $_POST['phone'];



    try{
        createUser($username, $password, $name, $email, $nif, $phone);

    }catch(PDOException $e){
        $_SESSION['form_values'] = $_POST;
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
        }
    }

    $_SESSION['success_messages'][] = 'Cliente registado com sucesso';  
    header("Location: $BASE_URL");

?>
