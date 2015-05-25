<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/products.php');  

    global $conn;

    $stock = $_POST['stock'];
    $idproduto = $_POST['idproduto'];
    
    changeStock($idproduto, $stock);

    echo json_encode("resultou");
?>
