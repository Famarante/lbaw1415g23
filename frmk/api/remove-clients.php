<?php
    include_once('../config/init.php');
    include_once($BASE_DIR .'database/users.php');  

    global $conn;

    $arrayid = $_POST['idArray'];

    foreach($arrayid as $aID){
        $stmt = $conn->prepare("DELETE FROM moradascliente WHERE idcliente = ?");
        $stmt->execute(array($aID));

        $stmt = $conn->prepare("DELETE FROM cliente WHERE idcliente = ?");
        $stmt->execute(array($aID));
        
        $stmt = $conn->prepare("DELETE FROM utilizador WHERE idutilizador = ?");
        $stmt->execute(array($aID));
        
    }
    echo json_encode($arrayid);

?>
