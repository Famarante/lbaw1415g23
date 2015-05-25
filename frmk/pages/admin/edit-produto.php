<?php
    include_once('../../config/init.php');
    include_once('../../database/products.php');

    if(!isset($_SESSION['admin_username'])){
        $smarty->display('codes/401.tpl');
    }
    else{
        $produto = getProductByID($_GET['id']);
        $smarty->assign('PRODUTO', $produto);
        $smarty->display('admin/edit-produto.tpl');
    }
?>