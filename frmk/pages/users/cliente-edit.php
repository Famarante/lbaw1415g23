<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/users.php');

    if($_SESSION['userid'] != $_GET['id']){
        $smarty->display('codes/401.tpl');
    }
    else{
        $userdata = getClientData();
        $smarty->assign('USERDATA', $userdata);
        $smarty->display('users/cliente-edit.tpl');
    }
?>
