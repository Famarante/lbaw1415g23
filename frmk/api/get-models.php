<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

    global $conn;

    $idmarca = $_POST['idmarca'];
    
    $result = $conn->prepare("SELECT idmodelo, nome FROM modelo WHERE idmarca=?");
    $result->execute(array($idmarca));
    $result = $result->fetchAll();

    echo json_encode($result);
?>
