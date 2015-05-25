<?php
    include_once('../config/init.php');
    include_once($BASE_DIR .'database/products.php');  

    global $conn;

    $idproduto = $_POST['idproduto'];

    removeProduto($idproduto);

    echo json_encode("removeu com sucesso");

?>
