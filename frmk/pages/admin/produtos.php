<?php
    include_once('../../config/init.php');
    include_once('../../database/products.php');
  
    if(!isset($_SESSION['admin_username'])){
        $smarty->display('codes/401.tpl');
    }
    else{
        if(isset($_GET['pagina'])){
            $produtos = getProductsByPage($_GET['pagina'], 10);
            $smarty->assign('PRODUTOS', $produtos);
        }
        $smarty->display('admin/produtos.tpl');
    }
?>