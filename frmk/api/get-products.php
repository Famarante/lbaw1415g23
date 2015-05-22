<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/products.php');  

    global $conn;
    
    $result = $conn->query("SELECT idproduto,nome FROM produto");
    $result = $result->fetchAll();

    echo json_encode($result);
?>
