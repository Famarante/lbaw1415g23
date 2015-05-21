<?php
    include_once('../../config/init.php');
  
    if(!isset($_SESSION['admin_username'])){
        $smarty->display('codes/401.tpl');
    }
    else{
        $smarty->display('admin/adicionar-produto.tpl');
    }
?>