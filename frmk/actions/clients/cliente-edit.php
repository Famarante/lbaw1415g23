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


    $userid = $_SESSION['userid'];

    $USERDATA = getClientData();

    if($USERDATA['username'] != $_POST['username']){
        updateUsername($_POST['username']);
    }

    if($USERDATA['password'] != $_POST['password']){
        updatePassword(sha1($_POST['password']));
    }

    if($USERDATA['fullname'] != $_POST['fullname']){
        updateFullname($_POST['fullname']);
    }

    if($USERDATA['email'] != $_POST['email']){
        updateEmail($_POST['email']);
    }

    if($USERDATA['nif'] != $_POST['nif']){
        updateNIF($_POST['nif']);
    }

    if($USERDATA['phone'] != $_POST['phone']){
        updatePhone($_POST['phone']);
    }

    /*if($USERDATA.address != $_POST['address'] || $USERDATA.zipcode != $_POST['zipcode'] || $USERDATA.ciTy != $_POST['city'] || $USERDATA.country != $_POST['country']){
            updateAddress($_POST['address'], $_POST['zipcode'], $_POST['city'], $_POST['country']);
        }*/

    $_SESSION['success_messages'][] = 'Cliente mofificado com sucesso';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
