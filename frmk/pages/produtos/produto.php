<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');

    if(isset($_GET['id'])){ 
        $produto = getProductByID($_GET['id']);
        $smarty->assign('PRODUTO', $produto);
        $smarty->display('products/ver-produto.tpl');
    }


?>
