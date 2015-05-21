<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

    global $conn;
    
    $result = $conn->query("SELECT idcategoria, nome FROM categoria");
    $result = $result->fetchAll();

    echo json_encode($result);
?>
